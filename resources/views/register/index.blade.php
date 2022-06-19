@extends('layouts.main')
@section('container')
    <div class="max-w-md p-6 shadow-lg rounded-md mx-auto">
        <h1 class="text-2xl text-center my-3 font-semibold">Sign Up</h1>
        <form action="/signup" method="post">
            @csrf
            <div class="my-3">
                <label for="" class="my-3 block">Email</label>
                <input type="email" name="email"
                    class="w-full border-2 px-4 p-2 rounded-md outline-none focus:ring-2  focus:ring-sky-300 @error('email') border-pink-500 @enderror"
                    placeholder="example@mail.com" value="{{ old('email') }}">
                @error('email')
                    <small class="text-pink-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="my-3">
                <label for="" class="my-3 block">Name</label>
                <input type="text" name="name"
                    class="w-full border-2 px-4 p-2 rounded-md outline-none focus:ring-2 focus:ring-sky-300 @error('name') border-pink-500 @enderror"
                    placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <small class="text-pink-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="my-3">
                <label for="" class="my-3 block">Username</label>
                <input type="text" name="username"
                    class="w-full border-2 px-4 p-2 rounded-md outline-none focus:ring-2 focus:ring-sky-300 @error('username') border-pink-500 @enderror"
                    placeholder="Usernmae" value="{{ old('username') }}">
                @error('usernanme')
                    <small class="text-pink-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="my-3">
                <label for="" class="my-3 block">Password</label>
                <input type="password" name="password"
                    class="w-full border-2 px-4 p-2 rounded-md outline-none focus:ring-2 focus:ring-sky-300 @error('password') border-pink-500 @enderror"
                    placeholder="Password">
                @error('password')
                    <small class="text-pink-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="my-3">
                <label for="" class="my-3 block">Confirm Password</label>
                <input type="password" name="confirmPassword"
                    class="w-full border-2 px-4 p-2 rounded-md outline-none focus:ring-2 focus:ring-sky-300 @error('confirmPassword') border-pink-500 @enderror"
                    placeholder="Password">
                @error('confirmPassword')
                    <small class="text-pink-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <button class="btn bg-sky-500 hover:bg-sky-700 w-full mt-3">Sign Up</button>
            </div>
        </form>
        <p class="my-3 text-center">Sudah Punya Akun? <a href="/signin" class="text-blue-500 hover:text-blue-700">Sign
                In</a></p>

    </div>
@endsection
