@extends('base')


@section('content')

<div class="my-4 text-right mr-16">
  <a href="/news/create" class="inline-flex items-center bg-alpha text-white px-10 py-5 mr-10 rounded font-medium">
      <i class="fas fa-plus mr-2"></i>
      Create News
  </a>
</div>
<x-card class="p-10 w-11/12 mx-auto">
  <table class="w-full table-auto rounded-sm">
      <tbody>
        <tr class="border-gray-300">
          <th class="px-4 py-8 border-t border-b border-gray-300 text-lg"> News</th>
          <th class="px-4 py-8 border-t border-b border-gray-300 text-lg">Action</th>
      </tr>
        @unless($news->isEmpty())
        @foreach($news as $newsItem)
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/news/{{$newsItem->id}}"> {{$newsItem->title}} </a>
          </td>
          <td class="flex flex-rows justify-center px-4 py-8 border-t border-b border-gray-300 text-lg">
            <button class="mx-4">
              <a href="/news/{{$newsItem->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i>
                  Edit
              </a>
            </button>
            <form method="POST" action="/news/{{$newsItem->id}}">
              @csrf
              @method('DELETE')
              <button class="text-red-500 ml-4"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <p class="text-center">No News Found</p>
          </td>
        </tr>
        @endunless

      </tbody>
  </table>
</x-card>
<div class="mt-6 p-4">
  {{$news ->links()}}
</div>

@endsection