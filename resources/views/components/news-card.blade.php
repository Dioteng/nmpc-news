@props(['newsItem'])

<x-card>
    <div class="flex">
        <img
        class="hidden w-64 mr-6 md:block"
        src="{{$newsItem->image ? asset('storage/' . $newsItem->image) : asset('/images/no-image.png')}}"
        alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/news/{{$newsItem->id}}">{{ $newsItem->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">
                Posted on: {{ $newsItem->created_at->format('M d, Y') }}
            </div>
            <p>{!! $newsItem->getPreview() !!}</p>
        </div>
    </div>
</x-card>