<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =Post::all();
        // ここのloadはbelongstoで定義した関数を使うので忘れずに<!DOCTYPE html>
        $posts->load('user');
        
        return view ('posts.index',[
            'posts' => $posts,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $post =new Post;
        // インスタンス化してこのモデルの中に入れいく必要がある
        $post->user_id = $request->input('user_id');
        $post->title   = $request->input('title');
        $post->area    = $request->input('area');
        $post->lang    = $request->input('lang');
        $post->message = $request->input('message');

        
        $post->save(); // 内容の保存をしないといけない
        return redirect ('post/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =Post::find($id); // $idがあるのでモデルPostからid=一つ一つのやつを見つける。

        if($post->area ===1){
            $area ='東北';
        }
        if($post->area ===2){
            $area ='関西';
        }
        if($post->area ===3){
            $area ='関東';
        }
        if($post->area ===4){
            $area ='近畿';
        }
        if($post->area ===5){
            $area ='四国';
        }
        if($post->area ===6){
            $area ='中国';
        }
        if($post->area ===7){
            $area ='九州';
        }

        
        if($post->lang ===1){
            $lang ='HTML/CSS';
        }
        if($post->lang ===2){
            $lang ='JavaScript';
        }
        if($post->lang ===3){
            $lang ='PHP';
        }
        if($post->lang ===4){
            $lang ='Ruby';
        }
        if($post->lang ===5){
            $lang ='その他';
        }
        return view('posts.show', 
        compact('post','area' , 'lang')); //compactは一つの変数をviewに渡すときの関数である。しかも複数の変数を一気に入れることができるから最高
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =Post::find($id);

        return view('posts.edit' , compact('post'));
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
        $post =Post::find($id);  
        // $post =new Post;   ←新しいものを作るのではなく、もともとあるものを使う必要がある。
        // インスタンス化してこのモデルの中に入れいく必要がある
        $post->user_id = $request->input('user_id');
        $post->title   = $request->input('title');
        $post->area    = $request->input('area');
        $post->lang    = $request->input('lang');
        $post->message = $request->input('message');

        
        $post->save(); // 内容の保存をしないといけない
        return redirect ('post/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::find($id);
        $post->delete();
        
        return redirect('post/index');
    }

    public function detail($id)
    {   $post =Post::find($id);
        if($post->area ===1){
            $area ='東北';
        }
        if($post->area ===2){
            $area ='関西';
        }
        if($post->area ===3){
            $area ='関東';
        }
        if($post->area ===4){
            $area ='近畿';
        }
        if($post->area ===5){
            $area ='四国';
        }
        if($post->area ===6){
            $area ='中国';
        }
        if($post->area ===7){
            $area ='九州';
        }

        
        if($post->lang ===1){
            $lang ='HTML/CSS';
        }
        if($post->lang ===2){
            $lang ='JavaScript';
        }
        if($post->lang ===3){
            $lang ='PHP';
        }
        if($post->lang ===4){
            $lang ='Ruby';
        }
        if($post->lang ===5){
            $lang ='その他';
        }

        return view ('details.index' , compact('post' ,'area' , 'lang'));
    }

    
}
