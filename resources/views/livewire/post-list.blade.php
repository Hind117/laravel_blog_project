<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div>
        @if ($search)
         Result of <strong>{{ $search }}</strong>
    @endif
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)


        <x-posts.post--item wire:key="{{ $post->id }}" :post="$post" />
        @endforeach
    </div>

    <div class="my-3">
        {{ $this->posts->links() }}
    </div>
</div>
