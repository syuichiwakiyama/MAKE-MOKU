@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-3 pr-5 ">
          <a href="{{route('post.create')}}">もくもく会の作成</a><br>
          <a href="{{route('post.index')}}">投稿の管理・編集</a><br>
        </div>  
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">もくもく会</div>
                  <div class="card-body">
                        <fieldset disabled>
                          <div class="form-group">
                            <label for="disabledTextInput">もくもく会のタイトル</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $post->title }}">
                          </div>
                          <div class="form-group">
                            <label for="disabledSelect">開催地域</label>
                            <select id="disabledSelect" class="form-control">
                              <option>{{$area}}</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="disabledSelect">開催地域</label>
                            <select id="disabledSelect" class="form-control">
                              <option>{{$lang}}</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="disabledTextInput">メッセージ</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $post->message }}">
                          </div>
                        </fieldset>
                        <a class="btn btn-primary" href="{{route('post.edit' ,['id' =>$post->id])}}" role="button">投稿の編集をする</a>
                       <form method="post" action="{{route('post.destroy' ,['id' =>$post->id])}}">
                       @csrf
                       <button type="submit" class="btn btn-danger mt-3">削除する</button>
                       </form>
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-md-6 -->
    </div><!-- row -->
</div><!-- container -->
@endsection
