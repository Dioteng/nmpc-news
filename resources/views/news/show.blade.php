@extends('base')


@section('content')

@include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{$newsItem['title']}}</h3>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i>Posted on: {{ $newsItem->created_at->format('M d, Y') }}
                </div>
                <img
                class="w-48 mr-6 mb-6"
                src="{{asset('images/no-image.png')}}"
                alt=""
                />
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <div class="text-lg space-y-6">
                        {{$newsItem['body']}}
                         
                    </div>
                </div>
            </div>
        </x-card>
    </div>

{{-- <h2>
    {{$newsItem['title']}}
</h2>
<div class="text-xl font-bold mb-4">
    Posted on: {{ $newsItem->created_at->format('M d, Y') }}
</div>
<p>
    {{$newsItem['body']}}
</p> --}}

@endsection