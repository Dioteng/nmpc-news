<x-card class="p-10 w-4/6 h-auto mx-auto my-12">
    <header class="text-center mb-12">
        @if($newsId)
            <h2 class="text-3xl font-bold mb-1">
                Edit News/Events
            </h2>
            <p class="mb-4">Make sure you don't get the information wrong.</p>
        @else
            <h2 class="text-3xl font-bold mb-1">
                Publish News/Events
            </h2>
            <p class="mb-4">Post new updates about MSU-IIT NMPC</p>
        @endif
    </header>

    {{-- Flowbite Stepper --}}
    <ol class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base flowbite">
        <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700 {{ $currentStep === 1 ? 'text-blue-500' : '' }}">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500 font-bold text-lg">
                <span class="me-2">1</span>
                News <span class="hidden sm:inline-flex sm:ms-2">Details</span>
            </span>
        </li>
        <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700 {{ $currentStep === 2 ? 'text-blue-500' : '' }}">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500 font-bold text-lg">
                <span class="me-2">2</span>
                News <span class="hidden sm:inline-flex sm:ms-2">Content</span>
            </span>
        </li>
        <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700 {{ $currentStep === 3 ? 'text-blue-500' : '' }}">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500 font-bold text-lg">
                <span class="me-2">3</span>
                News <span class="hidden sm:inline-flex sm:ms-2">Image</span>
            </span>
        </li>
        <li class="flex items-center {{ $currentStep === 4 ? 'text-blue-500' : '' }} font-bold text-lg">
            <span class="me-2">4</span>
            Confirmation
        </li>
    </ol>

    @if ($errors->isNotEmpty())
        <div class="text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-4" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="block sm:inline">There are some errors with your submission.</span>
        </div>
    @endif
    @if ($success)
        <div class="text-sm bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4" role="alert">
            <span class="block sm:inline">{{ $success }}</span>
            <span wire:click="resetSuccess" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
    @endif
    
    <form wire:submit.prevent="submit">
        <div>
            @if ($currentStep === 1)
                <div class="flex flex-col">
                    <div class="my-6">
                        <label
                            for="title"
                            class="inline-block text-lg mb-2 font-semibold"
                            >Title: </label
                        >
                        <input
                            wire:model.lazy="title"
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full h-16"
                            name="title"
                            id="title"
                            placeholder="Write the news headline here..."
                        />
                        @error('title')<x-input-error :messages="$errors->get('title')" class="mt-2" />@enderror
                    </div>
                    <div class="my-6">
                        <label
                            for="tags"
                            class="inline-block text-lg mb-2 font-semibold"
                            >Tags: </label
                        >
                        <input
                            wire:model.lazy="tags"
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full h-16"
                            name="tags"
                            id="tags"
                            placeholder="Enter 5 or less tags separated by commas."
                        />
                        @error('tags')<x-input-error :messages="$errors->get('tags')" class="mt-2" />@enderror
                    </div>
                </div>
            @elseif ($currentStep === 2)
                <div class="my-6">
                    <label
                        for="body"
                        class="inline-block text-lg mb-2 font-semibold"
                    >
                        News Article: 
                    </label>
                    <textarea
                        wire:model.lazy="body"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="body"
                        id="body"
                        rows="10"
                    ></textarea>
                    @error('body')<x-input-error :messages="$errors->get('body')" class="mt-2" />@enderror
                </div>
            @elseif ($currentStep === 3)
                <div class="my-6">
                    <label for="image" class="inline-block text-lg mb-2 font-sem">
                        Upload a Photo: 
                    </label>
                    <input
                        wire:model.lazy="image"
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="image"
                        id="image"
                    />
                    @error('image')<x-input-error :messages="$errors->get('image')" class="mt-2" />@enderror
                </div>
            @elseif ($currentStep === 4)
                <div class="my-6 flex flex-col">
                    <label for="confirmation" class="flex justify-center text-lg mb-2">
                        Confirmation 
                    </label>
                    <p class="flex justify-center">Are you sure you want to publish the news article?</p>
                </div>
                <div class="my-6">
                    <h1 class="inline-block text-lg mb-2 font-semibold">Title: </h1>
                    <h2 class="border border-gray-200 rounded p-2 w-full">{{ $title }}</h2>
                </div>
                <div class="my-6">
                    <h1 class="inline-block text-lg mb-2 font-semibold">Tags: </h1>
                    <h2 class="border border-gray-200 rounded p-2 w-full">{{ $tags }}</h2>
                </div>
                <div class="my-6">
                    <h1 class="inline-block text-lg mb-2 font-semibold">News Article: </h1>
                    <h2 class="border border-gray-200 rounded p-2 w-full">{{ $body }}</h2>
                </div>
                <div class="my-6">
                    <h1 class="inline-block text-lg mb-2 font-semibold">News Image: </h1>
                    @if($image)
                        <img src="{{ asset('storage/' . $image) }}" alt="Uploaded image">
                    @endif
                </div>
            @endif
        </div>
        <div class="flex items-center justify-between px-4 py-3 bg-gray-50 text-right sm:px-6">
            @if ($currentStep === 1)
                <div></div>
            @else
                <button wire:click="goToPreviousStep" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                    Back
                </button>
            @endif
            @if ($currentStep === count($pages))
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            @else
                <button wire:click="goToNextStep" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Next
                </button>
            @endif
        </div>
    </form>
</x-card>