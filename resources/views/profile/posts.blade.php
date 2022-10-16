@extends('template')

@section('content')
    <main class="p-6">
        <section class="featured-posts">
            <div class="section-title">
                <h2><span>Your posts</span></h2>
            </div>
            <div class="bg-white">
                <div class="mx-auto max-w-2xl py-10 px-4 sm:py-19 sm:px-6 lg:max-w-7xl lg:px-8">
                    <h2 class="sr-only">Posts user</h2>
                    <div
                        class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 
                        lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        @forelse ($data as $post)
                            <a href="post/{{ $post->post->first()->slug }}" class="group hover:bg-orange-500 hover:p-5 rounded">
                                <div
                                    class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                                        alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                                </div>
                                <div class="content-post">
                                    <h2 class="mt-4 font-bold text-lg text-gray-900 hover:text-gray-500">
                                        {{ $post->post->first()->title }} </h2>
                                    <h3 class="mt-1 my-3 text-base font-light text-gray-700 hover:text-gray-500">
                                        {{ Str::limit($post->post->first()->content, 50, '...') }}
                                        <b class="text-black font-extrabold hover:text-gray-500"> read more </b>
                                    </h3>
                                    <div class="flex justify-evenly">
                                        <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                        <div class="content-author">
                                            <h5> You </h5>
                                            <h6 class="my-1"> Created: {{ $post->post->first()->created_at }} </h6>
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
                            <h2> You aren't have posts, create one right now.</h2>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
        {{-- {{ $data->links('components.pagination') }} --}}
    </main>
@endsection
