@extends('templates.layout')

@section('page')

    @foreach ($templates as $template)
        <div class="rounded  p-6 bg-white mb-3 shadow hover:shadow-md">
            <h3 class="text-lg font-semibold">
                <a href="#">{{ $template->display_name }}</a>
                <span class="text-xs text-gray-600 lowercase">{{ $template->author->username }}/{{ $template->name }}</span>
            </h3>
            <p class="my-3 text-gray-600">
                {{ $template->description }}
            </p>
            <p class="text-sm text-gray-500 my-2">
                Added by <a href="{{ route('app.users.show', $template->author) }}">{{ $template->author->username }}</a> {{ $template->created_at->diffForHumans() }}
            </p>
        </div>
    @endforeach

    <div class="mt-5 flex items-center justify-start text-sm">

        {{ $templates->links() }}

    </div>

@endsection
