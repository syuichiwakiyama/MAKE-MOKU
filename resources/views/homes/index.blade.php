@extends('layouts.app')
@include('layouts.home')

@section('content')

<div class="home-img">
    <img src="https://images.unsplash.com/photo-1579256945418-f3b7eab8073a?ixlib=rb-1.2.1
    &ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" width="100%" >
    <div class="carsoul-caption">
        <h2>あったらいいな。を形に</h2>
        <h1>MAKE MOKU</h1>
        <div class="btns">
            <a class="btn btn-outline-light" href="#moku" role="button" >さっそくもくもく会を探す</a>
            <a class="btn btn-outline-danger" href="{{route('homes.make')}}" role="button">MAKE MOKUとは</a>
        </div>
    </div>
</div>


<div class="container">
    <div class="posts pt-3">
        <p class="ml-3 text-align:center;">絞り込み検索</p>
        <form action="{{route('post.search')}}"  method="get">
        @csrf
        @component('components.area_lang')
        
        @endcomponent
        </form>

        <a name="moku"></a>
        <h1 class="p-4">もくもく会一覧</h1>
            <div class="row justify-content-center">
               @foreach($posts as $post)      
               @if(isset($post))
                <div class="col-sm-12  col-md-6 col-lg-3 card-post">
                    <a href="{{route('comments.show' ,
                    ['id'=>$post->id ,  'post' =>$post ])}}" class="card-detail">
                    </a>
                    <div class="detail pt-3">
                            <img src="https://i.pinimg.com/originals/51/83/ef/5183ef65b82a66cf573f324e59cf028b.png" width="80px" height="80px" style="border-radius:50%;">
                            <h3 class="pl-3">{{$post->user->name}}</h3>
                            <div class="post-tag">
                                    <span class="detail-tag area">{{$post->area->area_name}}</span>
                                    <span class="detail-tag lang">{{$post->lang->lang_name}}</span>
                            </div>
                        <hr>
                        <h2 class="font-weight-bold">{{$post->title}}</h2>
                        <hr>
                        <p>{{$post->message}}</p>
                    </div><!-- detail -->
                </div>  <!-- col-sm-3 card-post -->
                @else
                   <p>投稿はありません</p>
                @endif
                @endforeach 
        </div><!-- row -->
    </div><!-- posts -->          
</div> <!-- container -->
@endsection