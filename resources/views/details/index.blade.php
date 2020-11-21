@extends('layouts.app')
<script src="https://kit.fontawesome.com/d003cac0ec.js" crossorigin="anonymous"></script>
<style>
  .detail{border: 1px solid blue;}
  .comment{border:8px solid #ddd; width=100%; border-radius:25px;}
  p{font-size:24px;}
</style>
@section('content')
  <div class="container detail pt-5 mt-5">
    <h1 style="text-align:center; ">プログラミング初心者の方でもくもくしましょう！！</h1>
    <div class="row pl-5 pt-5">
      <div class="people pr-5">
         <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" width="100px" height="100px" style="border-radius:50%;">
         <h1>Green</h1>
      </div><!-- people -->
       <div class="comment">
          <p>Web制作関連に興味がある人同士で集まって意見の交流をしていきませんか？</p>
       </div><!-- comment -->
    </div><!-- row -->

    <div class="p-5">
        <h1>もくもく会の詳細</h1>
        <hr>
        <p><i class="far fa-clock"></i>11月22日(日)12:00~15:00</p>
        <p><i class="fas fa-map-marker-alt"></i>（大阪府大阪市北区天満２丁目１−８）</p>
        <p>
        最寄り駅 天満橋駅
        基本的にHTML/CSSを使用する方同士で集まってもくもくしたいと思っています。
        特に学習内容は固定する必要はありません。適宜分からないところがあればお互いに教えあうなどしたいと考えています
        参加費はありません。もくもく会終了後にカフェなどでお話しできたらと思っています。
        </p>
        @guest
            @if (Route::has('register'))                            
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">
                ログインしてチャットする</a>
            @endif
        @else
            <a class="btn btn-danger btn-lg" href="{{ route('index') }}" role="button">チャットする</a>
        @endguest
    </div>
  </div><!-- container -->
@endsection