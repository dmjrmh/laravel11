<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}"
                class="mb-1 text-2xl tracking-tight hover:underline font-bold text-gray-900"
                target="_blank">{{ $post['title'] }}</a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light line-clamp-2">{{ $post['description'] }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline" target="_blank">Read
                more &raquo;</a>
        </article>
    @endforeach
</x-layout>
