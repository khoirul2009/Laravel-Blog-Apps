@extends('dashboard.layouts.main')

@section('main')
    <div class="p-4 w-full">

        <div class=" p-6 rounded-lg mt-2 lg:px-60">
            <h1 class="text-2xl font-semibold"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <p>By : <a href="/posts?author={{ $post->author->username }}"
                    class="text-sky-500 hover:text-sky-600">{{ $post->author->name }}</a> in <a
                    class="text-sky-500  hover:text-sky-600"
                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <br>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }} "
                    class="rounded-lg max-h-400px">
            @else
                <img src="http://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="my-2 rounded-lg">
            @endif
            <article class="block leading-8">
                {!! $post->body !!}

            </article>
            <br>
            <a href="/dashboard/posts" class="mt-4">Back</a>
        </div>


    </div>
@endsection
