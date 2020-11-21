@extends('layouts.app')
<style>
    .home-img {position:relative; }
    .carsoul-caption{position:absolute; color:#fff; top:50%; left:50%;
    transform:translate(-50%,-50%); text-align:center;}
    .home-img h1{font-size:100px; font-weight:bold;}
    .detail h3{display:inline-block;}
    .detail .post-tag{display:inline-block;}
    .card-post{border:1px solid gray; margin:40px; position:relative;}
    .card-detail{position:absolute; top:0; left:0; width:100%; height:100%; }
    .card-detail:hover{background-color:rgba(0,0,0,.2);}
    .search{text-align:center;}
</style>
@section('content')

<div class="home-img">
    <img src="https://images.unsplash.com/photo-1579256945418-f3b7eab8073a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" width="100%" >
    <div class="carsoul-caption">
        <h2>あったらいいな。を形に</h2>
        <h1>MAKE MOKU</h1>
        <a class="btn btn-outline-light" href="#moku" role="button" >さっそくもくもく会を探す</a>
        <button type="button" class="btn btn-outline-danger">MAKE MOKUとは</button>
    </div>
</div>


<div class="container" >
    <div class="search">
        <a name="moku"></a>
        <p>絞り込み検索</p>
        <div class="form-row align-items-center ">
            <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>言語を選択</option>
                <option value="1">HTML/CSS</option>
                <option value="2">JavaScript</option>
                <option value="3">PHP</option>
                <option value="4">Ruby</option>
                <option value="5">その他</option>
            </select>
            </div>
            <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>地域を選択</option>
                <option value="1">東北</option>
                <option value="2">関東</option>
                <option value="3">関西</option>
                <option value="4">近畿</option>
                <option value="5">四国</option>
                <option value="6">九州</option>
            </select>
            </div>
        
            <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">検索する</button>
            </div>
        </div>
    </div>

    <div class="posts pt-3">
        <h1>もくもく会一覧</h1>
            <div class="row">
               @foreach($posts as $post)
                <div class="col-sm-3 card-post">
                    <a href="{{route('detail')}}" class="card-detail"></a>
                    <div class="detail">
                        <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" width="100px" height="100px" style="border-radius:50%;">
                        <h3>Green</h3>
                        <div class="post-tag pt-2">
                            <button  class="btn btn-lg btn-primary" disabled>{{$post->lang}}</button>
                            <button  class="btn btn-secondary btn-lg" disabled>{{$post->lang}}</button>
                        </div>
                        <hr>
                        <h2 class="font-weight-bold">{{$post->title}}</h2>
                        <p>{{$post->message}}</p>
                        <hr>
                    </div>
                </div>  <!-- col-sm-3 card-post -->
                @endforeach
            </div><!-- row -->

         
        </div><!-- row -->
    </div><!-- posts -->
</div> <!-- container -->
@endsection