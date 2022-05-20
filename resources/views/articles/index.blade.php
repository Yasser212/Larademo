<x-layout>
    @if (Auth::check())
        <!-- Don't put anything here -->
    @else
    @endif

    <main
        class="xl:py-8 sm:py-4 h-s md:px-6 lg:px-8 xl:px-0 xl:w-9/12 max-w-screen-xl lg:grid-cols-3 sm:grid-cols-2 mx-auto grid gap-4 md:gap-4 xl:gap-8">

        @unless(count($articles) == 0)

            @foreach ($articles as $article)
                <x-article-card :article="$article" />
            @endforeach
        @else
            <p>No articles found</p>
        @endunless

    </main>
    <div class="mt-6 p-4">
        {{ $articles->links() }}
    </div>
</x-layout>
