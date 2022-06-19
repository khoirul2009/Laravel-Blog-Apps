@extends('dashboard.layouts.main')

@section('main')
    <div class="p-4 w-full">
        <h1 class="text-2xl font-semibold mb-3">{{ $title }}</h1>
        <form action="/dashboard/posts" method="post" id="form" enctype="multipart/form-data">
            @csrf
            <label for="" class="block my-2">Title</label>
            <input type="text" id="title" placeholder="Type here" name="title"
                class="input block input-bordered border-2 w-full max-w-md @error('title') border-pink-500 @enderror"
                autofocus value="{{ old('title') }}" />
            @error('title')
                <span class="text-pink-500">{{ $message }}</span>
            @enderror
            <label for="" class="block my-2">Slug</label>
            <input type="text" id="slug" placeholder="Type here" name="slug"
                class="input block input-bordered border-2 w-full max-w-md @error('slug') border-pink-500 @enderror" readonly
                value="{{ old('slug') }}" />
            @error('slug')
                <span class="text-pink-500">{{ $message }}</span>
            @enderror
            <label for="" class="block my-2">Category</label>
            <select
                class="select w-full max-w-md block select-bordered border-2 @error('category_id') border-pink-500 @enderror"
                name="category_id" id="category">
                @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('category_id')
                <span class="text-pink-500">{{ $message }}</span>
            @enderror
            <div
                class="block my-3 input input-bordered border-2 border-dashed max-w-md text-center h-fit p-4 @error('image') border-pink-500 @enderror">
                <label for="file-upload" class="cursor-pointer hover:opacity-80">
                    <span class="block" id="logo-img">
                        <ion-icon name="image" class="text-2xl"></ion-icon>
                        <p>Upload Image</p>
                    </span>
                    <img src="" alt="" class="img-preview" id="image-preview">
                    <input id="file-upload" type="file" class=" sr-only" name="image" onchange="previewImg()">
                </label>

            </div>
            @error('image')
                <span class="text-pink-500">{{ $message }}</span>
            @enderror

            <div class="max-w-3xl">
                <label for="" class="block my-2">Body</label>
                <input id="x" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="x"></trix-editor>
            </div>
            @error('body')
                <span class="text-pink-500">{{ $message }}</span>
            @enderror
            <button type="submit" class="btn my-5 block">Submit</button>
        </form>
    </div>
@endsection
