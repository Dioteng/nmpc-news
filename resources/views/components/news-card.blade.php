@props(['newsItem'])

<x-card>
    <div class="flex flex-col">
        <div class="w-full h-64 overflow-hidden rounded-t-3xl">
            <img
            class="w-full h-full mr-6 md:block rounded-t-3xl object-cover"
            src="{{$newsItem->image ? asset('storage/' . $newsItem->image) : asset('/images/no-image.png')}}"
            alt=""
            />
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold">
                <a href="/news/{{$newsItem->id}}">{{ $newsItem->title }}</a>
            </h3>
            <div class="text-sm mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h1V2h2v1h8V2h2v1h1a2 2 0 012 2v11a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm2-2h8v1H4V3zm10 0h2v1h-2V3zM4 6h12v1H4V6zm0 2h12v1H4V8zm0 2h12v1H4v-1zm0 2h12v1H4v-1zm0 2h12v1H4v-1zm0 2h12v1H4v-1z" clip-rule="evenodd" />
                </svg>
                {{ $newsItem->created_at->format('M d, Y') }}
                <x-news-tags :tagsCsv="$newsItem->tags" />
            </div>
            <p>{!! $newsItem->getPreview() !!}</p>
            <a href="/news/{{$newsItem->id}}" class="font-semibold text-alpha hover:text-beta"><u>Read More</u></a>
        </div>
    </div>
</x-card>
