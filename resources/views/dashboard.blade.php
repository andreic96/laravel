@extends('layouts.master')

@section('content')
    @include('includes.message-block')
    <section class="row new-post">
        <div class="col-md-6 offset-md-3">
            <header><h3>What do you have to say?</h3></header>
            <form action="{{route('post.create')}}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="body" rows="5" placeholder="Your post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create new post</button>
                <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 offset-md-3">
            <header><h3>What other people say...</h3></header>
            @foreach($posts as $post)
                <article class="post" data-postid="{{$post->id}}">
                    <p>{{$post->body}}</p>
                    <div class="info">
                        Posted by {{$post->user->first_name}} on {{$post->created_at}}
                    </div>
                    <div class="interaction">
                        <a href="#">Like</a> |
                        <a href="#">Dislike</a>
                        @if(Auth::user()==$post->user)
                            |
                            <a href="#" class="edit">Edit</a> |
                            <a href="{{route('post.delete', ['post_id'=>$post->id])}}">Delete</a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <div class="modal fade" id="edit-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit the post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var token='{{Session::token()}}';
        var url='{{route('edit')}}';
    </script>
@endsection