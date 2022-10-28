@extends('template')

@section('content')
    <div class="overflow-hidden bg-white shadow sm:rounded-lg py-1 px-6">
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-black">Photo</dt>
                    <dd class="mt-1 text-sm text-black sm:col-span-2 sm:mt-0">
                        <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
                            <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                <div class="flex w-0 flex-1 items-center">
                                    <form action="{{ route('profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label for="photo">
                                            <img id="photo-profile" class="inline-block rounded-full ring-2 ring-white"
                                            src="{{ Storage::disk('public')->url($user->thumb) }}" alt="Photo of profile">
                                        </label>
                                        <input type="file" name="photo" id="photo" hidden accept="image/jpeg, image/png, image/jpg">
                                        <button href="{{ route('profile.update', $user->id) }}" class="font-medium text-orange-500 hover:text-orange-900">
                                            Change
                                        </button>
                                    </form>
                                </div>
                                @error('photo') <small class="text-red-500"> {{ $message }} </small> @enderror
                            </li>
                        </ul>
                    </dd>
                </div>
                <div class="bg-orange-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-dd($request->thumb);6">
                    <dt class="text-sm font-medium text-black">First name</dt>
                    <dd class="mt-1 text-sm text-black sm:col-span-2 sm:mt-0 flex items-center flex-wrap">
                        {{ $user->firstName }}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 cursor-pointer hover:text-orange-800 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>

                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-black">Last name</dt>
                    <dd class="mt-1 text-sm text-black sm:col-span-2 sm:mt-0 flex items-center flex-wrap">
                        {{ $user->lastName }}
                        <form action="{{ route('profile.update', $user->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 cursor-pointer hover:text-orange-800 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </form>
                    </dd>
                </div>
                <div class="bg-orange-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-black">Email address</dt>
                    <dd class="mt-1 text-sm text-black sm:col-span-2 sm:mt-0 flex items-center flex-wrap">
                        {{ $user->email }}
                        <form action="{{ route('profile.update', $user->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 cursor-pointer hover:text-orange-800 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </form>
                    </dd>
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
                            {{ $user->description }}
                            <form action="{{ route('profile.update', $user->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 cursor-pointer hover:text-orange-800">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </form>
                        @else
                            There not anything about you.
                        @endif
                    </dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
