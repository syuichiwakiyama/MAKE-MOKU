@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-3 pr-5 ">
          <a href="">プロフィール</a><br>
          <a href="">もくもく会の作成</a><br>
          <a href="">投稿の管理・編集</a><br>
          <a href="">チャット</a>
        </div>  
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">もくもく会の編集</div>
                  <div class="card-body">
                  <form method="post" action="{{route('post.update' , ['id' => $post->id])}}">
                      @csrf
                    <input type="textarea" name="user_id" value="{{$post->user_id}}">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">もくもく会のタイトル</label>
                        <input name ="title"type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="おしゃべりもくもく会" value="{{$post->title}}">
                      </div>
                      <div class="form-group">
                        <label name="area" for="exampleFormControlSelect1">開催エリア</label>
                        <select name="area" class="form-control" id="exampleFormControlSelect1">
                          <option value="">選択してください</option>
                          <option value="1" @if($post->area ===1 ) selected @endif>東北</option>
                          <option value="2" @if($post->area ===2 ) selected @endif>関西</option>
                          <option value="3" @if($post->area ===3 ) selected @endif>関東</option>
                          <option value="4" @if($post->area ===4 ) selected @endif>近畿</option>
                          <option value="5" @if($post->area ===5 ) selected @endif>四国</option>
                          <option value="6" @if($post->area ===6 ) selected @endif>中国</option>
                          <option value="7" @if($post->area ===7 ) selected @endif>九州</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label name="lang" for="exampleFormControlSelect1">学習内容</label>
                        <select name="lang" class="form-control" id="exampleFormControlSelect1" >
                          <option value="">選択してください</option>
                          <option value="1" @if($post->lang ===1 ) selected @endif>HTML/CSS</option>
                          <option value="2" @if($post->lang ===2 ) selected @endif>JavaScript</option>
                          <option value="3" @if($post->lang ===3 ) selected @endif>PHP</option>
                          <option value="4" @if($post->lang ===4 ) selected @endif>Ruby</option>
                          <option value="5" @if($post->lang ===5 ) selected @endif>その他</option>
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
