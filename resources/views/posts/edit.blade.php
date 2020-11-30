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
                <div class="card-header">もくもく会の編集</div>
                  <div class="card-body">
                  <form method="post" action="{{route('post.update' , ['id' => $post->id])}}">
                      @csrf
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">もくもく会のタイトル</label>
                        <input name ="title"type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="おしゃべりもくもく会" value="{{$post->title}}">
                      </div>
                      <div class="form-group">
                        <label name="area_id" for="exampleFormControlSelect1">開催エリア</label>
                        <select name="area_id" class="form-control" id="exampleFormControlSelect1">
                          <option value="">選択してください</option>
                          <option value="1" @if($post->area_id ===1 ) selected @endif>東北</option>
                          <option value="2" @if($post->area_id ===2 ) selected @endif>関西</option>
                          <option value="3" @if($post->area_id ===3 ) selected @endif>関東</option>
                          <option value="4" @if($post->area_id ===4 ) selected @endif>近畿</option>
                          <option value="5" @if($post->area_id ===5 ) selected @endif>四国</option>
                          <option value="6" @if($post->area_id ===6 ) selected @endif>中国</option>
                          <option value="7" @if($post->area_id ===7 ) selected @endif>九州</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label name="lang_id" for="exampleFormControlSelect1">学習内容</label>
                        <select name="lang_id" class="form-control" id="exampleFormControlSelect1" >
                          <option value="">選択してください</option>
                          <option value="1" @if($post->lang_id ===1 ) selected @endif>HTML/CSS</option>
                          <option value="2" @if($post->lang_id ===2 ) selected @endif>JavaScript</option>
                          <option value="3" @if($post->lang_id ===3 ) selected @endif>PHP</option>
                          <option value="4" @if($post->lang_id ===4 ) selected @endif>Ruby</option>
                          <option value="5" @if($post->lang_id ===5 ) selected @endif>その他</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label name="message" for="exampleFormControlTextarea1">メッセージ</label>
                        <textarea name ="message"class="form-control" id="exampleFormControlTextarea1" placeholder="皆さんと黙々できることを楽しみにしています" rows="3">{{$post->message}}</textarea>
                      </div>
                        <button type="submit" class="btn btn-secondary text:center ">投稿を更新する</button>
                    </form>
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-md-8 -->
    </div><!-- row -->
</div><!-- container -->
@endsection
