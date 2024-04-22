<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);
        
        
        $comment = new Comment();

        Comment::create($validatedData);

        $comment->save();
        return redirect()->route('comments.index')
            ->with('success', 'Comment created successfully.');
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update($validatedData);

        return redirect()->route('comments.index')
            ->with('success', 'Comment updated successfully.');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->route('comments.index')
            ->with('success', 'Comment deleted successfully.');
    }

}
