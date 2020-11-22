@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-3 pr-5 ">
          <a href="">プロフィール</a><br>
          <a href="">もくもく会の作成</a><br>
          <a href="">投稿の管理・編集</a><br>
          <a href="}}">チャット</a>
        </div>  
        <div class="col-md-6">
            <div class="card">
                @foreach ($posts as $post)
                <div class="card-header">ダッシュボード </div>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">タイトル</th>
                            <td scope="col">{{$post->title}}</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">メッセージ</th>
                            <td>{{$post->message}}</td>
                          </tr>
                          <tr>
                            <th scope="row"><a class="btn btn-primary" href="{{route('post.show',['id' => $post->id])}}" role="button">詳細</a></th>
                            <td></td>
                          </tr>
                        </tbody>
                      </table> 
                @endforeach  
            </div><!-- card -->
        </div><!-- col-md-6 -->
    </div><!-- row -->
</div><!-- container -->
@endsection
