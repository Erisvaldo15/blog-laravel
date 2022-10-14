@extends('template')

@section('content')
    <section class="">
        <div class="relative overflow-hidden bg-white">
            <div class="mx-auto max-w-7xl">
                <div>
                    <div class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
                        <div class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
                            <div class="flex items-center justify-between px-5 pt-4">
                                <div>
                                    <img class="h-8 w-auto"
                                        src="https://tailwindui.com/img/logos/mark.svg?color=orange&shade=600" alt="">
                                </div>
                                <div class="-mr-2">
                                    <button type="button"
                                        class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close main menu</span>
                                        <!-- Heroicon name: outline/x-mark -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="space-y-1 px-2 pt-2 pb-3">
                                <a href="#"
                                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Home</a>

                                <a href="#"
                                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Posts</a>

                                <a href="#"
                                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Authors</a>

                                <a href="#"
                                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Contact</a>
                            </div>
                            <a href="#"
                                class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-indigo-600 hover:bg-gray-100">Log
                                in</a>
                        </div>
                    </div>
                </div>

                <main class="mx-auto mt-10 max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="flex min-h-full items-center justify-center px-4 sm:px-6 lg:px-8">
                        <div class="w-full max-w-md space-y-8">
                            <div>
                                <img class="mx-auto h-12 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=orange&shade=600"
                                    alt="Your Company">
                                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to
                                    your account</h2>
                            </div>
                            <form class="mt-8 space-y-6" action="{{ route('login.store') }}" method="POST">
                                @csrf
                                <div class="-space-y-px rounded-md shadow-sm">
                                    <div>
                                        <label for="email-address" class="sr-only">Email address</label>
                                        <input id="email-address" name="email" type="email" autocomplete="email" required
                                            class="relative block w-full appearance-none rounded-none rounded-t-md border 
                                            border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 
                                            focus:border-orange-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Email address" value="anderson99@example.net  ">
                                    </div>
                                    <div>
                                        <label for="password" class="sr-only">Password</label>
                                        <input id="password" name="password" type="password"
                                            autocomplete="current-password" required
                                            class="relative block w-full appearance-none rounded-none rounded-b-md border 
                                            border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 
                                            focus:border-orange-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Password" value="123456">
                                    </div>
                                </div>

                                <div class="flex items-center justify-between xs:flex-wrap xs:justify-center">
                                    <div class="flex items-center">
                                        <input id="remember-me" name="remember-me" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
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
                                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-orange-500 py-2 px-4 text-sm font-medium text-white hover:bg-orange-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
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
        </div>
    </section>
@endsection
