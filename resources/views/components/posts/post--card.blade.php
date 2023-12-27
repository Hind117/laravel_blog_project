@props(['post'])
<div>
    <a wire:navigate href="{{ route('posts.showPost', $post->title)}}">
        <div>
            <img class="w-full rounded-xl"
                src="{{ asset('storage/' . $post->image) }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2"><a href="http://127.0.0.1:8000/blog/laravel-34">
            </a>
            <p class="text-gray-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a wire:navigate href="{{ route('posts.showPost', $post->title)}}" class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
    </div>
</div>
