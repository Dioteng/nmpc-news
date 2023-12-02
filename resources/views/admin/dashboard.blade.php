@extends('base')

@section('content')

<div class="container">
    

    @if($unapprovedComments->count() > 0)
    
    <div class=" p-4 rounded-md mb-6 w-auto">
        <h2 class="text-3xl font-bold text-alpha mb-2">Pending Comments</h2>
        <p class="text-alpha">Review and approve the following comments:</p>
    </div>
    

        <table class="w-full table-auto rounded-sm">
            
            <thead>
                <tr>
                    <th class="px-4 py-2 text-center">Comment</th>
                    <th class="px-4 py-2 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($unapprovedComments as $comment)
                    <tr class="border-gray-300">
                        <td class="px-4 py-2 text-center">{{ $comment->body }}</td>
                        <td class="px-4 py-2 text-center">
                            <form method="post" action="{{ route('admin.approve.comment', $comment->id) }}" style="display: inline;">
                                @csrf
                                @method('post')
                                <button type="submit" class="inline-flex items-center bg-alpha text-white px-10 py-3 mr-10 rounded font-medium">Approve</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No unapproved comments.</p>
    @endif
    
</div>

@endsection
