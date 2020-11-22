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
                <div class="card-header">もくもく会を作成</div>
                  <div class="card-body">
                    <form method="post" action="{{route('post.store')}}">
                    @csrf
                    <input type="textarea" name="user_id" value="">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">もくもく会のタイトル</label>
                        <input name ="title"type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="おしゃべりもくもく会">
                      </div>
                      <div class="form-group">
                        <label name="area" for="exampleFormControlSelect1">開催エリア</label>
                        <select name="area" class="form-control" id="exampleFormControlSelect1">
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
                        <label name="lang" for="exampleFormControlSelect1">学習内容</label>
                        <select name="lang" class="form-control" id="exampleFormControlSelect1">
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
                        <textarea name ="message"class="form-control" id="exampleFormControlTextarea1" placeholder="皆さんと黙々できることを楽しみにしています" rows="3"></textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-secondary text:center">この内容で投稿する</button>
                    </form>
                </div>
            </div>
        </div><!-- col-md-8 -->
    </div><!-- row -->
</div><!-- container -->
@endsection
