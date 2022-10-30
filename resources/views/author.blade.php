@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">
                    <a href="{{ route('home') }}"
                        class="inline-flex rounded-md border border-transparent bg-orange-600 
                        py-2 px-4 text-center font-medium text-white hover:bg-orange-700 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                        Back
                    </a>
                    <div class="flex justify-around flex-wrap row post-top-meta authorpage">
                        <div class="col-md-10 col-xs-12">
                            <span class="author-description">
                                {{ $author->description }}
                            </span>
                            <div class="sociallinks">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <span class="dot">
                                </span>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                            <a href="#" class="bg-orange-500 text-white rounded hover:bg-orange-900 p-2">Follow</a>
                        </div>
                        <div class="col-md-2 col-xs-12 mt-4">
                            <img src="{{ Storage::url($author->photo) }}" class="rounded h-48">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="graybg authorpage">
        <div class="container">
            <h2 class="font-bold text-2xl text-center"> Other posts by this author</h2>
            <div class="listrecent listrelated">
                <div class="flex justify-center flex-wrap sm:p-2 authorpostbox">
                    @forelse ($author->post as $post)
                        <div class="ml-4 lg:mt-3 pointer-events-auto w-screen max-w-md">
                            <div class="flex h-full flex-col shadow-xl">
                                <div class="mt-4 bg-orange-300 text-gray-800 flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                                    <div class="mt-8">
                                        <div class="flow-root">
                                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                                <li class="flex py-6">
                                                    <a href="{{ route('post', $post->slug) }}">
                                                        <div
                                                            class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                            <img src="{{ Storage::url($post->thumb) }}" alt=""
                                                                class="h-full w-full object-cover object-center">
                                                        </div>
                                                        <div class="ml-4 flex flex-1 flex-col">
                                                            <div>
                                                                <div
                                                                    class="flex justify-between text-base font-medium text-gray-900">
                                                                    <h3>
                                                                        {{ $post->title }}
                                                                    </h3>
                                                                </div>
                                                                <p class="mt-1 text-sm text-gray-800">
                                                                    {{ Str::limit($post->content, 50, '...') }}
                                                                    <b
                                                                        class="text-black font-extrabold hover:text-gray-500">
                                                                        read more
                                                                    </b>
                                                                </p>
                                                            </div>
                                                            <div class="flex flex-1 items-end justify-between text-sm">
                                                                <p class="text-gray-800 mt-2">
                                                                    {{ $post->created_at->diffForHumans() }}
                                                                </p>
                                                                <span class="post-read-more">
                                                                    <a href="#" title="Bookmark">
                                                                        <svg class="svgIcon-use hover:bg-white hover:rounded"
                                                                            width="25" height="25"
                                                                            viewbox="0 0 25 25">
                                                                            <path
                                                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 
                                                                    2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 
                                                                    .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 
                                                                    .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 
                                                                    1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                                                fill-rule="evenodd">
                                                                            </path>
                                                                        </svg>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h2> {{ $author->full_name }} has no posts for recommendation. </h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
