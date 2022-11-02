@extends('template')

@section('content')
    <div class="overflow-hidden bg-white shadow sm:rounded-lg py-1 px-6">
        <form action="{{ route('profile.update', $user->firstName) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @if (session('updated-success'))
                <span class="font-bold text-green-600">
                    {{ session('updated-success') }}
                </span>
            @endif
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-black">Photo</dt>
                        <dd class="mt-1 text-sm text-black sm:col-span-2 sm:mt-0">
                            <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                    <div class="flex w-0 flex-1 items-center">
                                        <label for="photo">
                                            <img id="photo-profile" class="inline-block rounded-full ring-2 ring-white"
                                                src="{{ Storage::disk('public')->url($user->photo) }}"
                                                alt="Photo of profile">
                                        </label>
                                        <input type="file" name="photo" id="photo" hidden
                                            accept="image/jpeg, image/png, image/jpg">
                                    </div>
                                    @error('photo')
                                        <small class="text-red-500"> {{ $message }} </small>
                                    @enderror
                                </li>
                            </ul>
                        </dd>
                    </div>
                    <div class="bg-orange-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-black">First name</dt>
                        <dd class="mt-1 text-sm text-black sm:col-span-2 sm:mt-0 flex items-center flex-wrap">
                            <input id="firstName" name="firstName" type="text"
                                class="block w-full appearance-none rounded-none 
                                rounded-b-md border border-gray-300 px-3 py-1 text-gray-900 placeholder-gray-500 focus:z-10 
                                focus:border-black focus:outline-none focus:ring-orange-500 sm:text-sm"
                                value="{{ $user->firstName }}">
                            @error('firstName')
                                <span class="text-red-500"> {{ $message }} </span>
                            @enderror
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-black">Last name</dt>
                        <dd class="mt-1 text-sm text-black sm:col-span-2 sm:mt-0 flex items-center flex-wrap">
                            <input id="lastName" name="lastName" type="text"
                                class="block w-full appearance-none rounded-none 
                            rounded-b-md border border-gray-300 px-3 py-1 text-gray-900 placeholder-gray-500 focus:z-10 
                            focus:border-black focus:outline-none focus:ring-orange-500 sm:text-sm"
                                value="{{ $user->lastName ?? old('lastName') }}">
                            @error('lastName')
                                <span class="text-red-500"> {{ $message }} </span>
                            @enderror
                        </dd>
                    </div>
                    <div class="bg-orange-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-black">Email address</dt>
                        <dd class="mt-1 text-sm text-black sm:col-span-2 sm:mt-0 flex items-center flex-wrap">
                            {{ $user->email }}
                        </dd>
                    </div>
                </dl>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-black">Account created at </dt>
                <dd class="mt-1 text-sm text-black sm:col-span-2 sm:mt-0 flex items-center flex-wrap">
                    {{ $user->created_at->diffForHumans() }}
                </dd>
            </div>
            <div class="bg-orange-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-black">About</dt>
                <dd class="mt-1 text-sm text-black sm:col-span-2 sm:mt-0">
                    @if ($user->description)
                        <textarea id="description" name="description" type="text"
                            class="block w-full appearance-none rounded-none 
                    resize-none rounded-b-md border border-gray-300 px-3 py-1 text-gray-900 placeholder-gray-500 focus:z-10 
                    focus:border-black focus:outline-none focus:ring-orange-500 sm:text-sm"> {{ $user->description }} </textarea>
                        @error('description')
                            <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    @else
                        There not anything about you.
                    @endif
                </dd>
            </div>
            <button href="{{ route('profile.update', $user->id) }}"
                class="font-medium text-orange-500 hover:text-orange-900">
                Change
            </button>
            |
            <button type="reset" class="font-medium text-orange-500 hover:text-orange-900">
                Back to default
            </button>
        </form>
    </div>
@endsection
