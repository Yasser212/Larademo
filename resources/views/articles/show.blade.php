{{-- <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6"
                    src="{{ $article->logo ? asset('storage/' . $article->logo) : asset('/images/no-image.png') }}"
                    alt="" />

                <h3 class="text-2xl mb-2">
                    {{ $article->title }}
                </h3>
                <div class="text-xl font-bold mb-4">{{ $article->auther }}</div>

                <x-article-tags :tagsCsv="$article->tags" />


                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">Content</h3>
                    <div class="text-lg space-y-6">
                        {{ $article->content }}
                    </div>
                </div>
            </div>
        </x-card> --}}

{{-- <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/articles/{{$article->id}}/edit">
        <i class="fa-solid fa-pencil"></i> Edit
      </a>

      <form method="POST" action="/articles/{{$article->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
      </form>
    </x-card> --}}
{{-- </div> --}}



<x-layout>
    <div class="dark:text-slate-100 text-slate-800 flex w-4/5 justify-start mt-6">
        <div class="flex flex-col space-y-6 w-1/2 p-10">
            <div class="flex justify-start font-bold text-lg font-mono">
                <p>Sports</p>
                <span class="mx-2"> | </span>
                <p>World</p>
            </div>
            {{-- <div dir="ltr"> --}}
            <x-article-tags :tagsCsv="$article->tags" />
        </div>
        <div class="flex md:flex-col md:flex-nowrap">

            <a href="#" class="text-xl md:text-3xl font-extrabold mb-3">{{ $article['title'] }}</a>

            <a href="/resources/views/Posts"><img class="py-5 lg:w-fit" src="/posts_img/img(1).jpg" alt=""></a>


            <div class="flex flex-col">
                <p>{{ $article['title'] }}</p>
                <br>
                <hr class="border-black dark:border-white">
                <br>
                <p dir="rtl" class="text-sm line-clamp-3 font-semibold font-sans">{{ $article['content'] }}
                </p>



                <br>
                <div class="flex w-1/2 space-x-3">
                    <a href="">
                        <p class="text-nowrap font-semibold text-sm">{{ $article['author'] }}</p>
                    </a>

                </div>


            </div>
        </div>
    </div>
    </div>
</x-layout>
