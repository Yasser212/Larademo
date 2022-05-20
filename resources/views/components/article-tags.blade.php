@props(['tagsCsv'])

@php

$tags = explode(',', $tagsCsv);

@endphp

<ul class="flex flex-wrap space-x-2 space-y-1 justify-around mt-5">
    @foreach ($tags as $tag)
        <li class="py-1 px-3 rounded-2xl bg-slate-300 dark:bg-black hover:scale-105"><a
                href="/?tag={{ $tag }}">#{{ $tag }}</a>
        </li>
    @endforeach
</ul>
