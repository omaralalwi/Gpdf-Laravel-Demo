@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-bold"> {{ __('posts.pages.index') }} </h1>
    </div>

    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">

                        @foreach ($posts as $post)
                            @include('posts.partials.post-item', ['post' => $post])
                        @endforeach

                    </div>
                </main>

                <footer class="py-16 text-center text-black dark:text-white/70 text-lg">
                    Demo Laravel App For : <a class="text-white" href="https://github.com/omaralalwi/gpdf" target="_blank"> Gpdf Package </a>
                </footer>
            </div>
        </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
@endsection
