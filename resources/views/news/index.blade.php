@extends('base')


@section('content')

    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($news) == 0)

        @foreach($news as $newsItem)
        <x-news-card :newsItem="$newsItem" />
        @endforeach

        @else
        <p>No listings found</p>
        @endunless

    </div>

    <div class="mt-6 p-4">
        {{$news ->links()}}
    </div>
@endsection