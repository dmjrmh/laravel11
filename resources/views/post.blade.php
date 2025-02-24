<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md">
        <h3 class="mb-1 text-2xl tracking-tight hover:underline font-bold text-gray-900">{{ $post['title'] }}</h3>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 24 Feb 2025
        </div>
        <p class="my-4 font-light">{{ $post['description'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>
