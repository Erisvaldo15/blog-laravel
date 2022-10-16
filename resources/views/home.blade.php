@extends('template')

@section('content')
    <main class="p-6">
        @if (!request()->input('search'))
            <section class="featured-posts">
                <div class="section-title">
                    <h2><span>Featured</span></h2>
                </div>
                <div class="bg-white">
                    <div class="mx-auto max-w-2xl py-10 px-4 sm:py-19 sm:px-6 lg:max-w-7xl lg:px-8">
                        <h2 class="sr-only">Posts</h2>
                        <div
                            class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 
                        lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                            @forelse ($featured as $post)
                                <a href="post/{{ $post->slug }}" class="group hover:bg-orange-500 hover:p-5 rounded">
                                    <div
                                        class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                                            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <div class="content-post">
                                        <h2 class="mt-4 font-bold text-lg text-gray-900 hover:text-gray-500">
                                            {{ $post->title }} </h2>
                                        <h3 class="mt-1 my-3 text-base font-light text-gray-700 hover:text-gray-500">
                                            {{ Str::limit($post->content, 50, '...') }}
                                            <b class="text-black font-extrabold hover:text-gray-500"> read more </b>
                                        </h3>
                                        <div class="flex justify-evenly">
                                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                            <div class="content-author">
                                                <h5> {{ $post->user->full_name }} </h5>
                                                <h6 class="my-1"> {{ $post->created_at }} </h6>
                                            </div>
                                        </div>
                                        <span class="post-read-more">
                                            <a href="#" title="Bookmark">
                                                <svg class="svgIcon-use hover:bg-orange-300 hover:rounded" width="25"
                                                    height="25" viewbox="0 0 25 25">
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
                                </a>
                            @empty
                                <h2> No featured posts at the moment </h2>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
            <section class="recents-posts" id="recents-posts">
                <div class="section-title">
                    <h2><span>Recent posts</span></h2>
                </div>
                <div class="bg-white">
                    <div class="mx-auto max-w-2xl py-10 px-4 sm:py-19 sm:px-6 lg:max-w-7xl lg:px-8">
                        <h2 class="sr-only">Recent Posts</h2>
                        <div
                            class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 
                    lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                            @forelse ($posts as $post)
                                <a href="post/{{ $post->slug }}" class="group hover:bg-orange-500 hover:p-5 rounded">
                                    <div
                                        class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                                            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <div class="content-post">
                                        <h2 class="mt-4 font-bold text-lg text-gray-900 hover:text-gray-500">
                                            {{ $post->title }} </h2>
                                        <h3 class="mt-1 my-3 text-base font-light text-gray-700 hover:text-gray-500">
                                            {{ Str::limit($post->content, 50, '...') }}
                                            <b class="text-black font-extrabold hover:text-gray-500"> read more </b>
                                        </h3>
                                        <div class="flex justify-evenly">
                                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                            <div class="content-author">
                                                <h5> {{ $post->user->full_name }} </h5>
                                                <h6 class="my-1"> {{ $post->created_at }} </h6>
                                            </div>
                                        </div>
                                        <span class="post-read-more">
                                            <a href="#" title="Bookmark">
                                                <svg class="svgIcon-use hover:bg-orange-300 hover:rounded my-2"
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
                                </a>
                            @empty
                                <h2> No featured posts at the moment </h2>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="searched-posts">
                <div class="section-title">
                    <h2><span>Searched posts</span></h2>
                </div>
                <div class="bg-white">
                    <div class="mx-auto max-w-2xl py-10 px-4 sm:py-19 sm:px-6 lg:max-w-7xl lg:px-8">
                        <h2 class="sr-only">Posts</h2>
                        <div
                            class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 
                            lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                            @forelse ($posts as $post)
                                <a href="post/{{ $post->slug }}" class="group hover:bg-orange-500 hover:p-5 rounded">
                                    <div
                                        class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                                            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <div class="content-post">
                                        <h2 class="mt-4 font-bold text-lg text-gray-900 hover:text-gray-500">
                                            {{ $post->title }} </h2>
                                        <h3 class="mt-1 my-3 text-base font-light text-gray-700 hover:text-gray-500">
                                            {{ Str::limit($post->content, 50, '...') }}
                                            <b class="text-black font-extrabold hover:text-gray-500"> read more </b>
                                        </h3>
                                        <div class="flex justify-evenly">
                                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                            <div class="content-author">
                                                <h5> {{ $post->user->full_name }} </h5>
                                                <h6 class="my-1"> {{ $post->created_at }} </h6>
                                            </div>
                                        </div>
                                        <span class="post-read-more">
                                            <a href="#" title="Bookmark">
                                                <svg class="svgIcon-use hover:bg-orange-300 hover:rounded" width="25"
                                                    height="25" viewbox="0 0 25 25">
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
                                </a>
                            @empty
                                <h2> No featured posts at the moment </h2>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
        @endif
        {{ $posts->appends(['search' => request()->input('search')])->links('components.pagination') }}
    </main>
@endsection

{{-- -
            <section class="featured-posts">
               
                <div class="card-columns listfeaturedtag">
                    <!-- begin post -->
                    @forelse ($featured as $post)

        <a href="#" class="group">
           
              <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
            
            <h3 class="mt-4 text-sm text-gray-700">{{ $post->title }}</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">
                {{ Str::limit($post->content, 60, '...') }}
                <a href="{{ $post->slug }}"> read more </a>
            </p>
            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </a>
                        <div class="card">
                            <div class="row">
                                <div class="col-md-5 wrapthumbnail">
                                    <a href="post/{{ $post->slug }}">
                                        <div class="thumbnail" style="background-image:url(assets/img/demopic/1.jpg);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-block">
                                        <h2 class="card-title">
                                            <a href="post/{{ $post->slug }}"> {{ $post->title }} </a>
                                        </h2>
                                        <h4 class="card-text">
                                            {{ Str::limit($post->content, 60, '...') }}
                                            <a href="{{ $post->slug }}"> read more </a>
                                        </h4>
                                        <div class="metafooter">
                                            <div class="wrapfooter">
                                                <span class="meta-footer-thumb">
                                                    <a href="author.html"><img class="author-thumb"
                                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                            alt="Sal"></a>
                                                </span>
                                                <span class="author-meta">
                                                    <span class="post-name">
                                                        <a href="author.html"> {{ $post->user->full_name }} </a>
                                                    </span>
                                                </span>
                                                <br>
                                                <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                                    class="post-read">6 min read</span>
                                                </span>
                                                <span class="post-read-more"><a href="post/{{ $post->slug }}"
                                                        title="Read Story"><svg class="svgIcon-use" width="25"
                                                            height="25" viewbox="0 0 25 25">
                                                            <path
                                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post -->
                    @empty
                        <h3> No post in the moment </h3>
                    @endforelse
                </div>
            </section>

            <!-- End Featured ================================================== -->

            <!-- Begin List Posts ================================================== -->
            <section class="recent-posts">
                <div class="section-title">
                    <h2><span>All posts</span></h2>
                </div>
                <div class="card-columns listrecent">
                    @forelse ($posts as $post)
                        <div class="card">
                            <a href="post/{{ $post->slug }}">
                                <img class="img-fluid" src="assets/img/demopic/5.jpg" alt="">
                            </a>
                            <div class="card-block">
                                <h2 class="card-title">
                                    <a href="post/{{ $post->slug }}"> {{ $post->title }} </a>
                                </h2>
                                <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in
                                    to
                                    additional content. This content is a little bit longer.</h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
                                        <span class="meta-footer-thumb">
                                            <a href="author.html"><img class="author-thumb"
                                                    src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                    alt="Sal"></a>
                                        </span>
                                        <span class="author-meta">
                                            <span class="post-name"><a href="author.html">Sal</a></span><br />
                                            <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                                class="post-read">6 min read</span>
                                        </span>
                                        <span class="post-read-more"><a href="post/{{ $post->slug }}"
                                                title="Read Story"><svg class="svgIcon-use" width="25" height="25"
                                                    viewbox="0 0 25 25">
                                                    <path
                                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                        fill-rule="evenodd"></path>
                                                </svg></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post -->
                    @empty
                        <h2> No post in the momment</h2>
                    @endforelse
                </div>
            @else
                <section class="recent-posts">
                    <div class="section-title">
                        <h2><span> Posts searched </span></h2>
                    </div>
                    <div class="card-columns listrecent">
                        @forelse ($posts as $post)
                            <div class="card">
                                <a href="post/{{ $post->slug }}">
                                    <img class="img-fluid" src="assets/img/demopic/5.jpg" alt="">
                                </a>
                                <div class="card-block">
                                    <h2 class="card-title">
                                        <a href="post/{{ $post->slug }}"> {{ $post->title }} </a>
                                    </h2>
                                    <h4 class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in
                                        to
                                        additional content. This content is a little bit longer.</h4>
                                    <div class="metafooter">
                                        <div class="wrapfooter">
                                            <span class="meta-footer-thumb">
                                                <a href="author.html"><img class="author-thumb"
                                                        src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                        alt="Sal"></a>
                                            </span>
                                            <span class="author-meta">
                                                <span class="post-name"><a href="author.html">Sal</a></span><br />
                                                <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                                    class="post-read">6 min read</span>
                                            </span>
                                            <span class="post-read-more"><a href="post/{{ $post->slug }}"
                                                    title="Read Story"><svg class="svgIcon-use" width="25"
                                                        height="25" viewbox="0 0 25 25">
                                                        <path
                                                            d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                            fill-rule="evenodd"></path>
                                                    </svg></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end post -->
                        @empty
                            <h2> No post found</h2>
                        @endforelse
                    </div>
        @endif
        <label for="file" class="form-label">
            <img src="{{ asset('assets/img/demopic/2.jpg') }}" class="rounded-circle w-25" alt="Image of your profile"
                id="image-profile">
        </label>
        <!-- End List Posts -->
        {{ $posts->appends(['search' => request()->input('search')])->links() }}
        </section> --}}
