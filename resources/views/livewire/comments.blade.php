<div class="pt-10 mt-10 border-t border-gray-100 comments-box">
    <h2 class="mb-5 text-2xl font-semibold text-gray-900">Discussions</h2>
    @auth
        <textarea wire:model="comment"
            class="w-full p-4 text-sm text-gray-700 border-gray-200 rounded-lg bg-gray-50 focus:outline-none placeholder:text-gray-400"
            cols="30" rows="7"></textarea>
        <button wire:click="postComment"
            class="inline-flex items-center justify-center h-10 px-4 mt-3 font-medium tracking-wide text-white transition duration-200 bg-gray-900 rounded-lg hover:bg-gray-800 focus:shadow-outline focus:outline-none">
            Post Comment
        </button>
    @else
        <a wire:navigate class="py-1 text-pink-500 underline" href="{{ route('filament.app.auth.login') }}"> Login to Post Comments</a>
    @endauth
    <div class="user-comments px-3 py-2 mt-5">
        @forelse($this->comments as $comment)
        <div class="comment border-gray-100 py-5">
            <div class="flex items-center mb-4 text-sm user-meta">
                <span class="mr-1">{{ $comment->user->name }}</span>
                <span class="text-gray-500">. {{ $comment->created_at->diffForHumans() }}</span>
                </div>
                <div class="text-sm text-justify text-gray-700">
                    {{ $comment->comment }}
                </div>
            </div>
        @empty
        <div class="text-gray-500 text-center">
            <span> No Comments Posted</span>
        </div>
        @endforelse

        <div class="my-2">
            {{ $this->comments->links() }}
        </div>

    </div>
</div>
