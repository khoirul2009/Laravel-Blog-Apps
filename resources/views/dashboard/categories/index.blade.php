@extends('dashboard.layouts.main')

@section('main')
    <div class="p-4 w-full">
        <h1 class="text-2xl font-semibold mb-5">Post Category</h1>
        <a href="/dashboard/categories/create" class="btn mb-5 bg-sky-500 border-none hover:bg-sky-700">New Category</a>
        @if (session()->has('success'))
            <div class="alert alert-success shadow-lg lg:w-4/5 mb-3">
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
        <div class="overflow-x-auto">
            <table class="table w-4/5">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->

                    @foreach ($categories as $category)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $category->name }}</td>
                            <td class="flex">
                                <a href="/dashboard/categories/{{ $category->slug }}"
                                    class="btn btn-xs btn-success text-white text-xl hover:bg-green-600">
                                    <ion-icon name="eye"></ion-icon>
                                </a>
                                <a href="/dashboard/categories/{{ $category->slug }}/edit"
                                    class="btn btn-xs btn-warning text-white text-xl hover:bg-yellow-600">
                                    <ion-icon name="pencil"></ion-icon>
                                </a>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-xs btn-error text-white text-xl hover:bg-red-600"
                                        onclick=" return confirm('Are your sure?')">
                                        <ion-icon name="trash"></ion-icon>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
