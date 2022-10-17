@extends('template')

@section('content')
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=orange&shade=600"
                    alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Create your account</h2>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('register.store') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        @error('firstName')
                            <span class="text-red-500 font-bold"> {{ $message }} </span>
                        @enderror
                        <label for="First Name" class="sr-only">First name</label>
                        <input id="First Name" name="firstName" type="text" autocomplete="current-firstName"
                            value="{{ old('firstName') }}"
                            class="block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-orange-500 focus:outline-none focus:ring-orange-500 sm:text-sm"
                            placeholder="First Name">
                    </div>
                    <div>
                        @error('lastName')
                            <span class="text-red-500 font-bold"> {{ $message }} </span>
                        @enderror
                        <label for="lastName" class="sr-only">Last name</label>
                        <input id="lastName" name="lastName" type="text" autocomplete="lastName"
                            value="{{ old('lastName') }}"
                            class="block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-orange-500 focus:outline-none focus:ring-orange-500 sm:text-sm"
                            placeholder="lastName">

                        <div>
                            @error('email')
                                <span class="text-red-500 font-bold"> {{ $message }} </span>
                            @enderror
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" name="email" type="email" autocomplete="email"
                                value="{{ old('email') }}"
                                class="block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-orange-500 focus:outline-none focus:ring-orange-500 sm:text-sm"
                                placeholder="Email address">
                        </div>
                        <div>
                            @error('password')
                                <span class="text-red-500 font-bold"> {{ $message }} </span>
                            @enderror
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                value="{{ old('password') }}"
                                class="block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-orange-500 focus:outline-none focus:ring-orange-500 sm:text-sm"
                                placeholder="Password">
                        </div>
                        <div>
                            <label for="About" class="sr-only">About</label>
                            <textarea id="about" name="about" autocomplete="current-about"
                                class="resize-none block w-full 
                            appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 
                            placeholder-gray-500 focus:z-10 focus:border-orange-500 focus:outline-none focus:ring-orange-500 
                            sm:text-sm"
                                placeholder="About you" value="{{ old('about') }}"></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="mt-5 group relative flex w-full justify-center rounded-md border border-transparent bg-orange-500 
                        py-2 px-4 text-sm font-medium text-white hover:bg-orange-900 focus:outline-none focus:ring-2 
                        focus:ring-orange-500 focus:ring-offset-2">
                            Next
                            <span class="absolute inset-y-0 right-2 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </span>
                        </button>
                    </div>
            </form>
        </div>
    </div>
@endsection
