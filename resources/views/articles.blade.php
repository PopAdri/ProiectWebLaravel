<x-app-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold text-center my-8">Latest Articles</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse ($articles as $article)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $article->title }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $article->content }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="text-center text-gray-500">No articles available.</div>
            @endforelse
        </div>
    </div>
</x-app-layout>
