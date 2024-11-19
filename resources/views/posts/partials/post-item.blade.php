<div class="bg-white p-4 shadow-md rounded-lg">
    <h2 class="text-2xl font-semibold">{{ $post->transAttr('title') }}</h2>
    <p class="text-gray-600 mt-2">{{ Str::limit($post->transAttr('description'), 150) }}</p>
    <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 mt-2 inline-block"> {{ __('general.buttons.read_more') }}</a>
</div>
