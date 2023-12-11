@extends('base')

@section('content')

    @if($unapprovedComments->count() > 0)
    
    <div class=" p-4 rounded-md mb-6 w-auto">
        <h2 class="text-3xl font-bold text-alpha mb-2">Pending Comments</h2>
        <p class="text-alpha">Review and approve the following comments:</p>
    </div>
    
    <x-card class="p-10 w-11/12 mx-auto">
        <table class="w-full table-auto rounded-sm">
            <thead>
                <tr class="border-gray-300">
                    <th class="px-4 py-8 border-t border-b border-gray-300 text-lg">User</th>
                    <th class="px-4 py-8 border-t border-b border-gray-300 text-lg">Comment</th>
                    <th class="px-4 py-8 border-t border-b border-gray-300 text-lg">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($unapprovedComments as $comment)
                    <tr class="border-gray-300">
                        <td class="border-t border-b border-gray-300 text-lg px-4 py-2 text-center">{{ $comment->user->email }}</td>
                        <td class="border-t border-b border-gray-300 text-lg px-4 py-2 text-center">{{ $comment->body }}</td>
                        <td class="border-t border-b border-gray-300 text-lg px-4 py-2 text-center">
                            <form method="post" action="{{ route('admin.approve.comment', $comment->id) }}" style="display: inline;">
                                @csrf
                                @method('post')
                                <button type="submit" class="inline-flex items-center bg-alpha text-white px-10 py-3 mr-10 rounded font-medium">Approve</button>
                            </form>
                            <form method="post" action="{{ route('admin.reject.comment', $comment->id) }}" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="inline-flex items-center bg-beta text-white px-10 py-3 rounded font-medium">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-card>
    <x-flash-message/>
    @else
        <h1 class="text-center mx-auto mt-8 font-semibold text-4xl">No unapproved comments.</h1>
    @endif
@endsection
