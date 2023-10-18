@extends('base')

@section('content')

<x-card class="p-10 max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Edit News/Events
    </h2>
    <p class="mb-4">Make sure you don't get the information wrong.</p>
</header>

<form method="POST" action="/news/{{$newsItem->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label
            for="title"
            class="inline-block text-lg mb-2"
            >Title</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="title" 
            value="{{ $newsItem->title }}"
        />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>

    <div class="mb-6">
        <label for="image" class="inline-block text-lg mb-2">
            Upload a Photo
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="image"
        />
        <img
        class="w-auto mr-6 mb-6"
        src="{{$newsItem->image ? asset('storage/' . $newsItem->image) : asset('/images/no-image.png')}}"
        alt=""
        />
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
    </div>

    <div class="mb-6">
        <label
            for="body"
            class="inline-block text-lg mb-2"
        >
            News Article
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="body"
            rows="10"
            placeholder="Write your news article here..."
        >{{ $newsItem->body }}</textarea>
        <x-input-error :messages="$errors->get('body')" class="mt-2" />
    </div>

    <div class="mb-6">
        <button
            class="bg-alpha text-white rounded py-2 px-4 hover:bg-black"
        >
            Edit News
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</x-card>

@endsection