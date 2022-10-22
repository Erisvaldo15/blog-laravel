@extends('template')

@section('content')
    @include('components.modal_edit')

    <div class="section-title">
        <h2><span>Your posts</span></h2>
    </div>

    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-4 px-4 sm:py-18 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Products</h2>
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @forelse ($user->post as $data)
                    <a href="#" class="group">
                        <div
                            class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg"
                                alt="Olive drab green insulated bottle with flared screw lid and flat top."
                                class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <div id="content-post">
                            <h3 class="mt-4 font-bold text-md text-gray-900">
                                {{ $data->title }}
                            </h3>
                            <p class="mt-1 text-sm font-medium text-gray-700">
                                {{ $data->content }}
                            </p>
                            <div class="data bg-orange-500 p-1 mt-2 text-center rounded">
                                <small class="mt-1"> Created by you {{ $data->created_at->diffForHumans() }} </small>
                            </div>
                        </div>
                    </a>
                @empty
                    <h3> You not have posts. </h3>
                @endforelse
            </div>
        </div>
    </div>
@endsection
