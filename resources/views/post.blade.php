@extends('template')

@section('content')
    <section class="post">
        <div class="relative overflow-hidden bg-white">
            <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
                <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                    <div class="sm:max-w-lg">
                        <h1 class="font text-4xl font-bold tracking-tight text-gray-900">
                            {{ $post->title }}
                        </h1>
                        <p class="mt-4 text-xl text-gray-500">
                            {{-- <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white" 
                            src="{{ Storage::url($post->thumb) }}" alt="Photo of profile"> --}}
                            Created by <span class="font-bold text-black"> {{ $post->user->full_name }} </span> at
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>
                    <div>
                        <div class="mt-10">
                            <!-- Decorative image grid -->
                            <div aria-hidden="true"
                                class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                                <div
                                    class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                    <div class="flex items-center space-x-6 lg:space-x-8">
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg"
                                                    alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('home') }}"
                                class="inline-flex rounded-md border border-transparent bg-orange-600 py-3 px-8 text-center 
                                font-medium text-white hover:bg-orange-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                                </svg>
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flex flex-col items-center lg:py-10 lg:px-10">
        <section class="post-content">
            <div class="max-w-sm sm:max-w-2xl md:max-w-4xl">
                <p class="text-xl text-justify">
                    {{ $post->content }}
                </p>
            </div>
        </section>
        <section class="post-comments">
            <div class="max-w-sm sm:max-w-2xl md:max-w-4xl comments flex flex-col justify-center items-center p-6">
                <h2 class="text-2xl"> Comments: ({{ $post->comment->count() }}) </h2>
                <form action="{{ route('comment.store') }}" method="post" class="w-full">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="flex justify-center comment-input my-2">
                        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white mr-4" id="photo-profile" 
                        src="{{ Storage::url(auth()->user()->thumb) }}">
                        @if ($errors->first('comment'))
                            <textarea class="placeholder:text-red-600 p-3 w-9/12 h-40 rounded-md border-2 border-black outline-orange-600 resize-none" 
                            name="comment" id="comment" placeholder="{{$errors->first('comment')}}"></textarea>
                        @else
                            <textarea class="p-3 w-9/12 h-40 rounded-md border-2 border-black outline-orange-600 resize-none" name="comment"
                            id="comment" placeholder="Add your comment here"></textarea>
                        @endif
                    </div>
                    <button type="submit" class="py-2 px-4 text-white rounded bg-orange-600 hover:bg-orange-900">
                        Post
                    </button>
                </form>
                <ul>
                    @forelse ($post->comment as $comment)
                        <li class="flex flex-col mt-6">
                            <p class="text-justify text-xl">
                                {{ $comment->comment }}
                            </p>
                            <span class="font-bold my-2">
                                Commented by {{ $comment->user->full_name }}
                            </span>
                            <small> {{ $comment->created_at->diffForHumans() }} </small>
                        </li>
                    @empty
                        <li class="m-2 text-xl"> There not no comment</li>
                    @endforelse
                </ul>
            </div>
        </section>
    </section>
@endsection
