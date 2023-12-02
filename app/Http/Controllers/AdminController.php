<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Usamamuneerchaudhary\Commentify\Models\Comment;

class AdminController extends Controller
{
    public function index()
    {
        $unapprovedComments = Comment::where('approved', false)->get();
        return view('admin.dashboard', compact('unapprovedComments'));
    }

    public function approveComment($commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $comment->update(['approved' => true]);

        return redirect()->route('admin.dashboard')->with('success', 'Comment approved successfully');
    }
}
