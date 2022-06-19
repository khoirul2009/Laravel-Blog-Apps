@extends('layouts.main')

@section('container')
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:px-10">

        @foreach ($categories as $category)
            <a href="/posts?category={{ $category->slug }}"
                class="card max-w-xs max-h-16 bg-base-100 shadow-xl image-full transition ease-in-out delay-150 hover:scale-110 ">
                <figure><img src="http://source.unsplash.com/320x100?{{ $category->name }}"
                        alt="{{ $category->name }}" /></figure>
                <div class="card-body p-4">
                    <h2 class="card-title text-center">{{ $category->name }}!</h2>

                </div>
            </a>
        @endforeach
    </div>
@endsection
