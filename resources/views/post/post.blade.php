@extends('layouts.main')

@section('container')
    <div class="flex">
        <h1 class="text-2xl font-semibold ">Categories</h1>
        <a href="/categories" class="ml-auto mt-auto text-sky-500 font-medium hover:text-sky-700">See All
            Categories</a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 md:grid-rows-2 grid-rows-4 gap-4 md:px-10 mt-5 ">
        @foreach ($categories as $category)
            <a href="/posts?category={{ $category->slug }}"
                class="card max-w-xs max-h-16 bg-base-100 shadow-xl image-full transition ease-in-out delay-150 hover:scale-110">
                <figure><img src="http://source.unsplash.com/320x100?{{ $category->name }}"
                        alt="{{ $category->name }}" /></figure>
                <div class="card-body p-4">
                    <h2 class="card-title text-center">{{ $category->name }}!</h2>

                </div>
            </a>
        @endforeach
    </div>
    <div class="flex mt-7">
        <h1 class="text-2xl font-semibold">{{ $title }}</h1>
        <form action="/posts" class="ml-auto mt-auto">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="form-control">
                <div class="input-group">
                    <input type="text" placeholder="Search…" class="input input-bordered" name="search"
                        value="{{ request('search') }}" />
                    <button type="submit" class="btn btn-square">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </form>

    </div>
    @if (count($posts) > 0)
        <div class="grid grid-cols-2 md:grid-cols-3 gap-5 mt-5">
            @foreach ($posts as $item)
                <a href="/posts/{{ $item->slug }}"
                    class="block p-6 rounded-lg  max-w-full shadow-lg transition ease-in-out delay-150 hover:scale-105 hover:bg-slate-200 focus:bg-sky-500 focus:text-slate-100">
                    <img src="http://source.unsplash.com/500x400?{{ $item->category->name }}"
                        alt="{{ $item->category->name }}" class="rounded-lg ">
                    <h1 class="text-xl font-semibold">{{ $item->title }}</h1>
                    <div class="flex">
                        <p>By : {{ $item->author->name }}</p>
                        <p class="ml-auto ">{{ $item->category->name }}</p>
                    </div>
                    <br>
                    <p class="">
                        {{ $item->excerpt }}
                    </p>

                </a>
            @endforeach
        </div>
    @else
        <br><br>
        <h1 class="text-center text-xl">No Post Found</h1>
    @endif

    <div class="mb-10 mt-5 space-x-5">

        {{ $posts->links() }}
    </div>
    <br>

@endsection
