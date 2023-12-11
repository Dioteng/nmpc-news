@extends('base')


@section('content')

    @include('partials._search')
    
    <button class="mx-6 my-2 bg-alpha inline-flex py-2 px-4 border border-transparent shadow-sm rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
        <a href="/" class="md:text-lg text-sm"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
    </button>
    <div class="mx-4">
        <x-card class="p-10 w-auto h-auto mx-auto">
            <div class="flex flex-col items-start justify-start text-start text-left md:mx-32 mx-4 md:mt-8">
                <h1 class="md:font-bold font-semibold md:text-3xl text-md mb-2">{{$newsItem['title']}}</h1>
                <div class="md:text-lg text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h1V2h2v1h8V2h2v1h1a2 2 0 012 2v11a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm2-2h8v1H4V3zm10 0h2v1h-2V3zM4 6h12v1H4V6zm0 2h12v1H4V8zm0 2h12v1H4v-1zm0 2h12v1H4v-1zm0 2h12v1H4v-1zm0 2h12v1H4v-1z" clip-rule="evenodd" />
                    </svg>Posted on: {{ $newsItem->created_at->format('M d, Y') }}
                    <i class="fa-regular fa-user ml-4"></i> {{ $newsItem->user->name }}
                </div>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img
                    class="w-full mr-6 mb-6 md:w-2/3 md:h-auto"
                    src="{{$newsItem->image ? asset('storage/' . $newsItem->image) : asset('/images/no-image.png')}}"
                    alt=""
                />
            </div>
            <div class="border border-gray-200 w-full my-6"></div>
            <div class="text-md md:text-xl space-y-6 md:mx-32">
                {!! nl2br(e($newsItem['body'])) !!}     
            </div>
        </x-card>
        <div class="flex flex-row justify-start my-4 md:mx-32 mx-4">
            <h1 class="font-semibold md:text-2xl text-md mx-4">Tags: </h1>
            <x-news-tags :tagsCsv="$newsItem->tags" class="mx-4"/>
        </div>
        <livewire:comments :model="$newsItem"/>
    </div>

@endsection