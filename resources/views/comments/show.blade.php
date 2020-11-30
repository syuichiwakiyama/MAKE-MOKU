@extends('layouts.app')
<script src="https://kit.fontawesome.com/d003cac0ec.js" crossorigin="anonymous"></script>
<style>
  .detail{border: 1px solid rgba(0,0,0,.25); margin:40px; position:relative;
    box-shadow: rgba(0,0,0,.06) 0px 6px 6px 0px !important; border-radius:5px;}
  .comment{border:8px solid #ddd; width=100%; border-radius:25px;}
  p{font-size:24px;}
</style>
@section('content')

  <div class="container detail pt-5 mt-5">
    <h1 style="text-align:center; font-weight:bold;">{{$post->title}}</h1>
    <div class="row pl-5 pt-5">
      <div class="people  col-sm-2  ">
         <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" width="100px" height="100px" style="border-radius:50%;">
         <h1>{{$post->user->name}}</h1>
      </div><!-- people -->
       <div class="comment  col-sm-8  mr-5">
          <p>{{$post->message}}</p>
       </div><!-- comment -->
    </div><!-- row -->


    <div class="row">
      <div class="p-5 col-9"  style="margin-left:auto; margin-right:auto";>
          <h1 style="text-align:center;">もくもく会の詳細</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">開催地域</th>
                <td scope="col">{{$post->area->area_name}}</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">学習言語</th>
                <td>{{$post->lang->lang_name}}</td>
              </tr>
            </tbody>
          </table>
            <a class="btn btn-danger btn-lg" href="{{route('comments.create', ['id' =>$post->id])}}" role="button">もくもく会に参加する</a>
      </div>
    </div>
  </div><!-- container -->
  
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              @foreach($comments as $comment)
               @if($comment->post_id == $post->id)
                <div class="card mb-3">
                    <div class="card-header ">{{$comment->user->name}}</div>
                    <div class="card-body">
                      <p>{{$comment->comment}}</p>
                    </div>
                </div>
                @endif
              @endforeach
          </div>
      </div>
  </div>
  {{ $comments->links() }}
@endsection