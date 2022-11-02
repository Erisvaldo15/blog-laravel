@extends('template')

@section('content')
    <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        @if (session('postCreatedWithSuccess'))
            <span class="font-bold text-green-600"> {{ session('postCreatedWithSuccess') }} </span>
        @endif
        <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <label for="title-post" class="block text-sm font-medium text-black">Title</label>
            @error('title')
                <small class="text-red-500">
                    {{ $message }}
                </small>
            @enderror
            <div class="mt-1 rounded-md shadow-sm">
                <input type="text" name="title" id="title-post"
                    class="block border-2 rounded w-1/3 p-2 border-black 
            focus:border-orange-500 focus:ring-red-500 sm:text-sm outline-orange-500 mt-1"
                    placeholder="10 curiosity about cat">
            </div>
            <div>
                <label for="content" class="block text-sm font-medium text-black mt-4">Content</label>
                @error('content')
                    <small class="text-red-500">
                        {{ $message }}
                    </small>
                @enderror
                <div>
                    <textarea id="content" name="content" rows="3"
                        class="mt-1 p-2 block w-full rounded-md border-black shadow-sm 
                border-2 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm outline-orange-500"
                        placeholder="Hi, my name's Bryan"></textarea>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-black mt-4">Cover photo</label>
                @error('thumb')
                    <small class="text-red-500">
                        {{ $message }}
                    </small>
                @enderror
                <div class="mt-4 flex justify-center rounded-md border-2 border-dashed border-black px-6 pt-5 pb-6">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48" aria-hidden="true">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer rounded-md bg-white font-medium text-orange-500 
                        focus-within:outline-none focus-within:ring-2 focus-within:ring-orange-900 
                        focus-within:ring-offset-2 hover:text-orange-900">
                                <span>Upload a file</span>
                                <input id="file-upload" name="thumb" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG and JPEG up to 5MB</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="submit"
                    class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 
            bg-orange-500 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-orange-900 focus:outline-none 
            focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                    id="cancel-add-post">
                    Create
                </button>
            </div>
        </div>
    </form>
@endsection
