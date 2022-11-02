@extends('template')

@section('content')
    <div class="overflow-hidden bg-white">
        <main class="mx-auto mt-10 max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
            <div class="flex min-h-full items-center justify-center px-4 sm:px-6 lg:px-8">
                <div class="w-full max-w-md space-y-8">
                    <div>
                        <img class="mx-auto h-12 w-auto"
                            src="https://tailwindui.com/img/logos/mark.svg?color=orange&shade=600" alt="Your Company">
                        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to
                            your account</h2>
                        @if (session('logout'))
                            <span class="font-bold text-red-500 text-center mt-6"> 
                                {{ session('logout') }} 
                            </span>
                        @endif
                        @error('not-found')
                            <h3 class="text-center mt-6 text-red-500 font-bold"> {{ $message }} </h3>
                        @enderror
                    </div>
                    <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="-space-y-px rounded-md shadow-sm">
                            <div>
                                <label for="email-address" class="sr-only">Email address</label>
                                <input id="email-address" name="email" type="email" autocomplete="email"
                                    class="block w-full appearance-none rounded-none rounded-t-md border 
                                    border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 
                                    focus:border-orange-500 focus:outline-none focus:ring-orange-500 sm:text-sm"
                                    placeholder="Email address" value="maria33@example.com">

                            </div>
                            <div>
                                <label for="password" class="sr-only">Password</label>
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    class="block w-full appearance-none rounded-none rounded-b-md border border-gray-300 
                                px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-orange-500 
                                focus:outline-none focus:ring-orange-500 sm:text-sm"
                                    placeholder="Password" value="123456">
                                @error('password')
                                    <span class="text-red-500 font-bold"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex items-center justify-between xs:flex-wrap xs:justify-center">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                                <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember
                                    me</label>
                            </div>

                            <div class="text-sm">
                                <a href="#" class="font-medium text-orange-500 hover:text-orange-900">Forgot
                                    your
                                    password?</a>
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="group flex w-full justify-center rounded-md border border-transparent bg-orange-500 py-2 px-4 text-sm font-medium text-white hover:bg-orange-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <!-- Heroicon name: mini/lock-closed -->
                                    <svg class="h-5 w-5 text-white group-hover:text-white"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
