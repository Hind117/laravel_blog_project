@props(['post'])

<article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="article-image col-span-4 flex items-center">
            <a wire:navigate href="{{ route('posts.showPost', $post->title)}}">
                <img class="mw-100 mx-auto rounded-xl" src=" {{ asset('storage/' . $post->image) }} " alt="">
            </a>
        </div>
        <div class="col-span-8">
            <div class="flex items-center py-1 text-sm article-meta">
                {{ $post->author->name }}
                <span class="text-xs text-gray-500"> {{ $post->published_at }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a wire:navigate href="{{ route('posts.showPost', $post->title)}}">
                    {{ $post->title }}
                </a>
            </h2>

            <p class="mt-2 text-base font-light text-gray-700">
                {{ $post->postSelection() }}
            </p>
            <div class="flex items-center justify-between mt-6 article-actions-bar">

                <div>
                    <livewire:like-button :key="'like-' . $post->id.now()" :$post />
                </div>
            </div>
        </div>
    </div>
</article>
