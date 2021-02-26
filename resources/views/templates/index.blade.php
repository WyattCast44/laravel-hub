@extends('templates.layout')

@section('page')

    @foreach ($templates as $template)
        <div class="p-6 mb-3 bg-white rounded shadow hover:shadow-md">
            <h3 class="text-lg font-semibold">
                <a href="{{ route('app.users.show', $template->user) }}">
                    {{ $template->user->username }}
                </a>
                /
                <a href="{{ route('app.templates.show', $template) }}" class="lowercase">
                    {{ $template->name }}
                </a>
            </h3>
            <p class="my-3 text-gray-600">
                {{ $template->description }}
            </p>
            <p class="my-2 text-sm text-gray-500">
                Added by <a href="{{ route('app.users.show', $template->user) }}">{{ $template->user->username }}</a> {{ $template->created_at->diffForHumans() }}
            </p>
        </div>
    @endforeach

    <div class="flex items-center justify-start mt-5 text-sm">

        {{ $templates->links() }}

    </div>

@endsection
