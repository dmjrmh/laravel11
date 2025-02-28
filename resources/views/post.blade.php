<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md">
        <h3 class="mb-1 text-2xl tracking-tight hover:underline font-bold text-gray-900">{{ $post['title'] }}</h3>
        <div>
            By <a href="/authors/{{ $post->user->username }}" target="_blank"
                class="text-base text-gray-500 hover:underline">{{ $post->user->name }}</a> in
            <a href="/categories/{{ $post->category->slug }}" target="_blank"
                class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a> |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post['description'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts index</a>
    </article>
</x-layout>
