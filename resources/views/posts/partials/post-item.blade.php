<div class="bg-white p-4 shadow-md rounded-lg">
    <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
    <p class="text-gray-600 mt-2">{{ Str::limit($post->content, 150) }}</p>
    <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 mt-2 inline-block">Read more</a>
</div>
