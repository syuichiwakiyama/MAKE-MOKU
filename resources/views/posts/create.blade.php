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
                <div class="card-header">もくもく会を作成</div>
                  <div class="card-body">
                    <form method="post" action="{{route('post.store')}}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">もくもく会のタイトル</label>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input name ="title"type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="おしゃべりもくもく会" value="{{old('title')}}">
                      </div>
                      <div class="form-group">
                        <label name="area_id" for="exampleFormControlSelect1">開催エリア</label>
                        @error('area_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select name="area_id" class="form-control" id="exampleFormControlSelect1" value="{{old('area_id')}}">
                          <option value="">選択してください</option>
                          <option value="1">東北</option>
                          <option value="2">関西</option>
                          <option value="3">関東</option>
                          <option value="4">近畿</option>
                          <option value="5">四国</option>
                          <option value="6">中国</option>
                          <option value="7">九州</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label name="lang_id" for="exampleFormControlSelect1">学習内容</label>
                        @error('lang_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select name="lang_id" class="form-control" id="exampleFormControlSelect1">
                          <option value="">選択してください</option>
                          <option value="1">HTML/CSS</option>
                          <option value="2">JavaScript</option>
                          <option value="3">PHP</option>
                          <option value="4">Ruby</option>
                          <option value="5">その他</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label name="message" for="exampleFormControlTextarea1">メッセージ</label>
                        @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea name ="message"class="form-control" id="exampleFormControlTextarea1" placeholder="皆さんともくもくできることを楽しみにしています" rows="3">{{old('message')}}</textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-secondary text:center">この内容で投稿する</button>
                    </form>
                </div>
            </div>
        </div><!-- col-md-8 -->
    </div><!-- row -->
</div><!-- container -->
@endsection
