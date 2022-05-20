@props(['article'])


<x-card>
    <a href="/articles/{{ $article->id }}"><img class="mx-auto lg:w-fit" src="{{ asset('posts_img/img(1).jpg') }}"
            alt="Article Image"></a>
    <div class="flex flex-col py-5 px-4 sm:px-6 md:justify-between ">
        <a href="/articles/{{ $article->id }}"
            class="text-xl md:text-2xl font-extrabold  text-right mb-3">{{ $article->title }}</a>
        <hr class="border-black dark:border-white">
        <a class="mt-3" href="">
            <p dir="rtl" class=" text-sm line-clamp-2 font-semibold font-sans">{{ $article->content }}
            </p>
            <a href="/articles/{{ $article->id }}" class="text-sm underline text-blue-500">Read more...</a>
        </a>

        {{-- <div class="flex justify-start mt-4 sm:mt-0">
            <a href="/articles/{{ $article->id }}"
                class="btn btn-error rounded-full bg-gradient-to-br from-brightRedLight to-brightRed shadow-inner w-1/3">
                ... إقرأ المزيد</a>
        </div> --}}
        <br>
        <div class="flex justify-between">
            <div class="flex w-1/2 space-x-3">
                <a href="">
                    <p class="text-nowrap font-semibold text-sm">{{ $article->author }}</p>
                </a>
                <p class="font-extrabold leading-4">.</p>
                <p class="text-nowrap font-semibold text-sm">{{ $article->date }}</p>
            </div>
            <div class="flex w-1/3 justify-between">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </a>
            </div>
        </div>
        <br>
        <hr class="border-black dark:border-white">
        <x-article-tags :tagsCsv="$article->tags" />
    </div>

</x-card>
