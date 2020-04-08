<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class SubmitPackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('submit packages');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'packagist_namespace' => 'required',
            'packagist_name' => [
                'required',
                function ($attribute, $value, $fail) {
                    $composerName = $this->getComposerName();

                    if (! $this->packageStringUnique(request('any_package')->id ?? null)) {
                        $fail("The package {$composerName} has already been submitted.");
                    }
                },
            ],
            'url' => 'required|url',
            'abstract' => 'required|max:190',
            'screenshots' => [
                'array',
                function ($attribute, $value, $fail) {
                    $value = (is_array($value)) ? $value : [];

                    if (count($value) > 20) {
                        $deleteCount = count($value) - 20;
                        $fail("You may only upload 20 {$attribute}. Please delete {$deleteCount} ".Str::plural('screenshot', $deleteCount));
                    }
                },
            ],
        ];
    }

    public function getComposerName()
    {
        return request('packagist_namespace').'/'.request('packagist_name');
    }

    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator, $this->failedValidationResponse($validator));
    }

    private function failedValidationResponse($validator)
    {
        $collaborators = Collaborator::inRequest(request())->get();

        $newTags = collect(request('tags-new', []))->map(function ($item) {
            return ['name' => $item];
        });

        return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput(array_merge(request()->all(), [
                    'selectedAuthor' => $collaborators->where('id', request('author_id', null))->first(),
                    'selectedCollaborators' => $collaborators->whereIn('id', request('contributors', []))->values(),
                    'selectedTags' => Tag::whereIn('id', request('tags', []))->get()->toBase()->merge($newTags),
                    'screenshots' => Screenshot::forRequest(request('screenshots')),
                ]));
    }

    private function packageStringUnique($id = null)
    {
        $query = Package::where('composer_name', $this->getComposerName());

        if ($id) {
            $query->where('id', '!=', $id);
        }

        return $query->count() == 0;
    }
}
