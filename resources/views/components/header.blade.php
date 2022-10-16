<div class="relative px-4 p-4 sm:px-6 lg:px-8">
    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
        <div class="flex flex-shrink-0 flex-grow items-center lg:flex-grow-0">
            <div class="flex w-full items-center justify-between md:w-auto">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Your Company</span>
                    <img alt="Your Company" class="h-8 w-auto sm:h-10"
                        src="https://tailwindui.com/img/logos/mark.svg?color=orange&shade=600">
                </a>
            </div>
        </div>
        <div class="hidden md:ml-10 md:block md:space-x-8 md:pr-4"">
            <a href="{{ route('home') }}" class="font-medium text-gray-500 hover:text-gray-900">Home</a>
            <a href="{{ route('home') }}" class="font-medium text-gray-500 hover:text-gray-900">Posts</a>
            <a href="{{ route('home') }}" class="font-medium text-gray-500 hover:text-gray-900">Author</a>
            <a href="{{ route('home') }}" class="font-medium text-gray-500 hover:text-gray-900">Contact</a>
            @if (Route::getCurrentRoute()->getName() === 'view-login')
                <a href="{{ route('register.index') }}" class="font-medium text-orange-400 hover:text-orange-900">Sign
                    Up
                </a>
            @else
                <a href="{{ route('view-login') }}" class="font-medium text-orange-400 hover:text-orange-900">Sign In
                </a>
            @endif
        </div>
        <form action="{{ route('home') }}" method="get">
            <input type="search" name="search"
                class="relative block w-full appearance-none rounded-none rounded-t-md border 
            border-gray-300 px-3 py-2 ml-1 text-gray-900 placeholder-gray-500 focus:z-10 
            focus:border-orange-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                placeholder="Search by posts">
        </form>
        @if (auth()->user())
            <div class="relative ml-3">
                <div>
                    <button type="button"
                        class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </button>
                </div>
                <div class="flex flex-col items-center mt-6 hidden absolute right-0 z-10 mt-2 w-48 origin-top-right 
                    rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                    id="menu-profile">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="{{ route('profile.index') }}" id="user-menu-item-0"
                        class="block px-4 py-2 text-sm
                        text-gray-700" role="menuitem"
                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                    <a href="#" id="user-menu-item-0 "class="block px-4 py-2 text-sm text-gray-700"
                        role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                    <a href="{{ route('logout') }}" id="user-menu-item-0" class="block px-4 py-2 text-sm text-gray-700"
                        role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div>
            </div>
        @else 
            <span class="text-orange-500 text-sm hover:text-black ml-3"> Visitant </span>
        @endif
    </nav>
</div>