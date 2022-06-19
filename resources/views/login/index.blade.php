@extends('layouts.main')
@section('container')
    <div class="max-w-md p-6 shadow-lg rounded-md mx-auto">
        <h1 class="text-2xl text-center my-3 font-semibold">Sign In</h1>

        @if (session()->has('success'))
            <div class="alert alert-success shadow-lg">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        @if (session()->has('loginFail'))
            <div class="alert alert-error shadow-lg">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('loginFail') }}</span>
                </div>
            </div>
        @endif
        <form action="/signin" method="post">
            @csrf
            <div class="my-3">
                <label for="" class="my-3 block">Email</label>
                <input type="email" name="email"
                    class="w-full border-2 px-4 p-2 rounded-md outline-none focus:ring-2 focus:ring-sky-300 @error('email') border-pink-500 @enderror"
                    placeholder="example@mail.com" value="{{ old('email') }}" autofocus required>
                @error('email')
                    <small class="text-pink-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="my-3">
                <label for="" class="my-3 block">Password</label>
                <input type="password" name="password"
                    class="w-full border-2 px-4 p-2 rounded-md outline-none focus:ring-2 focus:ring-sky-300 @error('password') border-pink-500 @enderror"
                    placeholder="password" required>
                @error('password')
                    <small class="text-pink-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <button class="btn bg-sky-500 hover:bg-sky-700 w-full mt-3">Sign In</button>
            </div>
        </form>
        <p class="my-3 text-center">Belum Punya Akun? <a href="/signup" class="text-blue-500 hover:text-blue-700">Sign
                Up</a>
        </p>

    </div>
@endsection
