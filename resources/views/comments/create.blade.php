@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">もくもく会の主催者に返信する</div>
                  <div class="card-body">
                    <form method="post" action="{{route('comments.store')}}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                    <input type="hidden" name="post_id" value="{{$id}}">
                      <div class="form-group">
                          <label name="message" for="exampleFormControlTextarea1">コメント</label>
                          @if($errors->any())
                            <div class="alert alert-danger">
                              <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                              </ul>
                            </div>
                          @endif  
                          <textarea name ="comment" class="form-control" id="exampleFormControlTextarea1" placeholder="" rows="3"></textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-secondary text:center">この内容で送信する</button>
                    </form>
                </div>
            </div>
        </div><!-- col-md-8 -->
    </div><!-- row -->
</div><!-- container -->
@endsection
