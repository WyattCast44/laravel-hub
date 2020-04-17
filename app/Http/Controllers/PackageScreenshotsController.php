<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageScreenshotsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }

    public function store($vendor, Package $package, Request $request)
    {
        abort_if($package->user->id != auth()->id(), 403);

        $this->validate($request, [
            'files' => ['required', 'array'],
            'files.*' => ['image', 'max:5000']
        ]);

        foreach ($request->file('files') as $file) {
            try {
                $package->attachments()->create([
                    'user_id' => auth()->id(),
                    'path' => $file->storePublicly('public/attachments'),
                    'meta' => json_encode([
                        'extension' => $file->extension(),
                        'name' => $file->getClientOriginalName(),
                        'mime' => $file->getClientMimeType(),
                    ]),
                ]);
            } catch (\Exception $e) {
                report($e);
            }
        }

        flash('status', 'success', 'Attachments uploaded!');

        $package->load(['attachments']);

        return redirect()->to($package->route('screenshots.show'));
    }

    public function show($vendor, Package $package)
    {
        $package->load(['user', 'attachments']);

        return view('packages.show.screenshots', [
            'package' => $package
        ]);
    }
}
