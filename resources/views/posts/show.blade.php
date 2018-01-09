@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">

<h1>{{ $post->title }}</h1>

<hr>

{{ $post->body }}

<hr>

<div class="comments">

    <ul class="list-group">

    @foreach($post->comments as $comment)

    <li class="list-group">

        <strong>
            {{ $comment->created_at->diffForHumans() }}: &nbsp;
        </strong>

        {{ $comment->body }}

    </artliicle>

    @endforeach

    </ul>

</div>

<hr>

<div class="card">
    <div class="card-block">
        <form method="POST" action="/posts/{{ $post->id }}/comments">

            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
    </div>
</div>

@include('layouts.errors')



</div><!-- /.blog-main -->


@endsection