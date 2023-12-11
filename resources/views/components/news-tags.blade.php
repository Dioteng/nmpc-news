@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul>
    @foreach ($tags as $tag)
        <li class="inline-block bg-beta rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 my-2">
            <a href="/?tag={{$tag}}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>