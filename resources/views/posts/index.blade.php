<x-guest-layout>
    @section('title', __('posts.pages.index'))

    <x-slot name="header">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white">{{ __('posts.pages.index') }}</h1>
    </x-slot>


                        @foreach ($posts as $post)
                            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-56 object-cover">
                                    <div class="absolute top-0 left-0 p-4 bg-gradient-to-t from-black opacity-50 text-white">
                                        <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
                                    </div>
                                </div>

                                <div class="p-6">
                                    <p class="text-gray-600 dark:text-gray-300 line-clamp-3">{{ $post->excerpt }}</p>
                                    <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 mt-2 inline-block hover:underline">Read more</a>
                                </div>
                            </div>
                        @endforeach

        <!-- Pagination -->
        <div class="mt-6">
            {{ $posts->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</x-guest-layout>
