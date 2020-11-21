@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-3 pr-5 ">
          <a href="{{route('show')}}">プロフィール</a><br>
          <a href="{{route('post.create')}}">もくもく会の作成</a><br>
          <a href="">投稿の管理・編集</a><br>
          <a href="">チャット</a>
        </div>
        
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">プロフィール</div>
                  <div class="card-body">
                    <form>
                      @foreach($users as $user)
                        <div class="form-group">
                          <label for="exampleFormControlInput1">名前</label>
                          <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="{{$user->name}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">メールアドレス</label>
                          <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="{{$user->email}}">
                        </div>
                    
                        <!-- <div class="form-group">
                          <label for="exampleFormControlFile1">Example file input</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div> -->
                        <button type="submit" class="btn btn-secondary text:center">変更内容を保存する</button>
                      @endforeach
                    </form>
                </div>
            </div>
        </div><!-- col-md-8 -->
    </div><!-- row -->
</div><!-- container -->
@endsection
