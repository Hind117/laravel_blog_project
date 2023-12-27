<x-app-layout>
    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                Welcome to <span class="text-pink-500">&lt;Hind&gt;</span> <span class="text-gray-900"> Blog</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1">Where You Can Explore The World</p>
            <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
                href="{{ route('posts.index') }}">Start
                Reading</a>
        </div>
    @endsection
    <div class="mb-10">



        <h2 class="mt-16 mb-5 text-3xl text-pink-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 gap-y-32 w-full">
                @foreach ($latestPosts as $post)


                <div class="md:col-span-1 col-span-3">
                    <x-posts.post--card :post="$post"/>
                </div>
                @endforeach





            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-pink-500 font-semibold" href="{{ route('posts.index') }}">More
            Posts</a>
    </div>
</x-app-layout>
