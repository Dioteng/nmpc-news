@extends('base')


@section('content')

    @include('partials._search')
    @include('partials._hero')

    <div class="ml-4 mb-4 flex flex-row justify-between">
        <h1 class="md:text-3xl text-sm text-charlie justify-start ml-4"><b>Explore Latest News and Events</b></h1>
        <ol class="flex flex-row justify-end md:mr-32 mr-12">
            <a href="https://msuiitcoop.org/"><li class="font-medium text-beta md:text-xl text-sm"><i class="fa-solid fa-house"></i>  Home</li></a>
            <li class="md:text-xl text-sm font-medium text-beta mx-4">/</li>
            <a href="/"><li class="md:text-xl text-sm font-medium text-beta active">News Archive</li></a>
        </ol>
    </div>
    <div class="lg:grid lg:grid-cols-3 lg:grid-rows-2 gap-24 space-y-4 md:space-y-0 mx-4 px-16">

        @unless(count($news) == 0)

        @foreach($news as $newsItem)
        <x-news-card :newsItem="$newsItem" />
        @endforeach

        @else
        <p>No news found</p>
        @endunless

    </div>

    <div class="mt-6 p-4">
        {{$news ->links()}}
    </div>
@endsection