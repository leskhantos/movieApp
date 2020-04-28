@extends('layouts/main')

@section('content')
        <div class="movie-info border-b border-gray-800">
            <div class="container mx-auto px-4 py-16 flex">
                <img src="/img/parasite.jpg" alt="parasite" class="w-96" style="width: 24rem">
                <div class="ml-24">
                    <h2 class="text-4xl font-semibold">
                        Паразиты (2019)
                    </h2>
                    <div class="flex items-center text-gray-400 text-sm">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M8.58,17.25L9.5,13.36L6.5,10.78L10.45,10.41L12,6.8L13.55,10.45L17.5,10.78L14.5,13.36L15.42,17.25L12,15.19L8.58,17.25M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z" />
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Фев 20, 2020</span>
                        <span class="mx-2">|</span>
                        <span>Боевик, Триллер</span>
                    </div>
                     <p class="text-gray-300 mt-8">
                         Lorem asdasdasdasdsd
                     </p>
                    <div class="mt-12">
                        <h4 class="text-white font-semibold">
                            Directors
                        </h4>
                        <div class="flex mt-4">
                            <div>
                                <div>John Doe</div>
                                <div class="text-sm text-gray-400">Director</div>
                            </div>
                            <div class="ml-8">
                                <div>John Doe</div>
                                <div class="text-sm text-gray-400">Director</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12">
                        <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py5 hover:bg-orange-600 transition ease-in-out duration-150">
                            <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                            <span class="ml-2">Play Trailer</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-cast border-b border-gray-800">
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-4xl font-semibold">Cast</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                        <div class="mt-8">
                            <a href="">
                                <img src="" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="" class="text-lg mt-2 hover:text-gray:300"></a>
                                <div class="text-sm text-gray-400">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div> <!-- end movie-cast -->
        <div class="movie-images" x-data="{ isOpen: false, image: ''}">
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-4xl font-semibold">Images</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                        <div class="mt-8">
                            <a
                                @click.prevent="
                                isOpen = true
                            "
                                href="#"
                            >
                                <img src="" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                </div>
            </div>
        </div> <!-- end movie-images -->
@endsection
