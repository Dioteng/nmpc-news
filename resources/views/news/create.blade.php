@extends('base')

@section('content')

<x-card class="p-10 max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Upload News/Events
    </h2>
    <p class="mb-4">Post new updates about the MSU-IIT NMPC</p>
</header>

<form method="POST" action="/news" enctype="multipart/form-data">
    @csrf
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
            value="{{ old('title') }}"
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
        >{{ old('body') }}</textarea>
        <x-input-error :messages="$errors->get('body')" class="mt-2" />
    </div>

    <div class="mb-6">
        <button
            class="bg-alpha text-white rounded py-2 px-4 hover:bg-black"
        >
            Create News
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</x-card>

@endsection