@extends('template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">
                    <div class="row post-top-meta authorpage">
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
                            <a href="#" class="btn follow">Follow</a>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <img src="{{ Storage::url($author->thumb) }}" class="rounded">
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
                                <div class="bg-orange-300 text-gray-800 flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                                    <div class="mt-8">
                                        <div class="flow-root">
                                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                                <li class="flex py-6">
                                                    <div
                                                        class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                                            alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                                            class="h-full w-full object-cover object-center">
                                                    </div>

                                                    <div class="ml-4 flex flex-1 flex-col">
                                                        <div>
                                                            <div
                                                                class="flex justify-between text-base font-medium text-gray-900">
                                                                <h3>
                                                                    <a href="#">
                                                                        {{ $post->title }}
                                                                    </a>
                                                                </h3>
                                                                
                                                            </div>
                                                            <p class="mt-1 text-sm text-gray-800">
                                                                {{ Str::limit($post->content, 50, '...') }}
                                                                <b class="text-black font-extrabold hover:text-gray-500"> 
                                                                    read more 
                                                                </b>
                                                            </p>
                                                        </div>
                                                        <div class="flex flex-1 items-end justify-between text-sm">
                                                            <p class="text-gray-800">
                                                                {{ $post->created_at->diffForHumans() }}
                                                            </p>
                                                            <span class="post-read-more">
                                                                <a href="#" title="Bookmark">
                                                                    <svg class="svgIcon-use hover:bg-white hover:rounded"
                                                                        width="25" height="25" viewbox="0 0 25 25">
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
