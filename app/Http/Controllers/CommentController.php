<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\User;
use App\Post;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments =Comment::all();
        $comments->load('user' ,'post');

        return view ('comments.index' ,[
            'comments' =>$comments
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $q = \Request::query();

        return view('comments.create',[
            'id' => $q['id'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        $comment = new Comment;

        $comment ->user_id   =$request->input('user_id');
        $comment ->post_id   =$request->input('post_id');
        $comment ->comment   =$request->input('comment');

        $comment ->save();

        return redirect ('comments/show/' .$comment->post_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post ,$id)
    {
        $post   =Post::find($id);
        $post->load('area' ,'lang');
        $comments =Comment::paginate(10);
        $comments->load('user' ,'post');
    
        return view ('comments.show' , compact('post') ,[
            'comments' =>$comments,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
