@extends('layouts.app')
<style>
    .home-img {position:relative; }
    .carsoul-caption{position:absolute; color:#fff; top:50%; left:50%;
    transform:translate(-50%,-50%); text-align:center;}
    .home-img h1{font-size:100px; font-weight:bold;}
    .detail h3{display:inline-block;}
    .detail .post-tag{display:inline-block;}
    .card-post{border: 1px solid rgba(0,0,0,.25); margin:40px; position:relative;
                box-shadow: rgba(0,0,0,.06) 0px 6px 6px 0px !important; border-radius:5px;}
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


<div class="container">
    <div class="posts pt-3">
        <h1 class="p-4">もくもく会一覧</h1>
            <div class="row">
               @foreach($posts as $post)
                <div class="col-sm-3 card-post">
                    <a href="{{route('post.detail' ,
                    ['id'=>$post->id ,  'post' =>$post ])}}" class="card-detail">
                    </a>
                    <div class="detail">
                        <div class="pt-3">
                            <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" width="100px" height="100px" style="border-radius:50%; ">
                            <h3 class="pl-3">{{$post->user->name}}</h3>
                        </div>
                        <hr>
                        <h2 class="font-weight-bold">{{$post->title}}</h2>
                        <hr>
                        <p>{{$post->message}}</p>
                    </div>
                </div>  <!-- col-sm-3 card-post -->
                @endforeach
            </div><!-- row -->

         
        </div><!-- row -->
    </div><!-- posts -->
</div> <!-- container -->
@endsection