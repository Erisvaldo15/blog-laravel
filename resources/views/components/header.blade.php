<div class="relative bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?color=orange&shade=600"
                        alt="Logo of website">
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500"
                    aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('home') }}" method="get">
                <input id="search" name="search" type="search"
                    class="block w-full appearance-none rounded-none 
                rounded-b-md border border-gray-300 px-3 py-1 text-gray-900 placeholder-gray-500 focus:z-10 
                focus:border-orange-500 focus:outline-none focus:ring-orange-500 sm:text-sm"
                    placeholder="Search by posts">
            </form>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                @if (auth()->user())
                    <div class="relative ml-3">
                        <div>
                            <button type="button"
                                class="flex rounded-full bg-orange-500 text-sm focus:outline-none focus:ring-2 focus:ring-white 
                                focus:ring-offset-2 focus:ring-offset-black"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                @if (auth()->user()->photo)
                                    <img src="{{ Storage::url(auth()->user()->photo) }}"
                                        class="inline-block rounded-full ring-2 ring-white" id="photo-profile"
                                        alt="Image of profile">
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-2 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 
                                            20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 
                                            0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                @endif
                            </button>
                        </div>
                        <div class="flex flex-col items-center mt-6 hidden absolute right-0 z-20 mt-2 w-48 origin-top-right 
                        rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                            id="menu-profile">
                            <a href="{{ route('profile.index') }}" id="user-menu-item-0"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-600 hover:text-white"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="{{ route('profile.create') }}" id="user-menu-item-0"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-600 hover:text-white"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Create a new post</a>
                            <a href="{{ route('profile.edit', auth()->user()->firstName) }}" id="user-menu-item-0"
                                class="block px-4 py-2 hover:bg-orange-600 hover:text-white text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="{{ route('logout') }}" id="user-menu-item-0"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-600 hover:text-white"
                                role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                @else
                    <a href="{{ route('view-login') }}"
                        class="whitespace-nowrap text-base font-medium text-gray-500 
                   hover:text-gray-900">
                        Sign in
                    </a>
                @endif
                <a href="{{ route('register.create') }}"
                    class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border 
                    border-transparent bg-orange-600 px-4 py-2 text-base font-medium text-white shadow-sm 
                    hover:bg-orange-700">
                    Sign up
                </a>
            </div>
        </div>
    </div>
    <div class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden  z-10">
        <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="px-5 pt-5 pb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=orange&shade=600"
                            alt="Your Company">
                    </div>
                    <div class="-mr-2">
                        <button type="button"
                            class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-600" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Analytics</span>
                        </a>

                        <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                            <!-- Heroicon name: outline/cursor-arrow-rays -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-600" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Engagement</span>
                        </a>

                        <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                            <!-- Heroicon name: outline/shield-check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-600" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Security</span>
                        </a>

                        <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                            <!-- Heroicon name: outline/squares-2x2 -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-600" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Integrations</span>
                        </a>

                        <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                            <!-- Heroicon name: outline/arrow-path -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-600" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12c0-1.232.046-2.453.138-3.662a4.006 4.006 0 013.7-3.7 48.678 48.678 0 017.324 0 4.006 4.006 0 013.7 3.7c.017.22.032.441.046.662M4.5 12l-3-3m3 3l3-3m12 3c0 1.232-.046 2.453-.138 3.662a4.006 4.006 0 01-3.7 3.7 48.657 48.657 0 01-7.324 0 4.006 4.006 0 01-3.7-3.7c-.017-.22-.032-.441-.046-.662M19.5 12l-3 3m3-3l3 3" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Automations</span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="space-y-6 py-6 px-5">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Help Center</a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Guides</a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Events</a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Security</a>
                </div>
                <div>
                    <a href="{{ route('register.create') }}"
                        class="flex w-full items-center justify-center rounded-md border border-transparent bg-orange-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-orange-700">Sign
                        up</a>
                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer?
                        <a href="{{ route('view-login') }}" class="text-orange-600 hover:text-orange-500">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
