@extends('user.layouts.layout')

@section('title')
	{{ $topic->title }}
@endsection

@section('head')
	<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <style>
        .media-object { 
            border-radius: 100%; 
            border:2px solid #ccc;
        }
    </style>
@endsection

@section('body')
<!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 style="font-family: 'Aref Ruqaa', serif; font-size: 60px">{{ $topic->title }}</h2>
                    <div class="portfolio-meta">
                        <span>{{ Carbon\Carbon::parse($topic->publish)->toDateString() }}</span>|
                        <span> ركن: {{ $topic->headline->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->


<section class="single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="post-img">
                    <img class="img-fluid" alt="{{ $topic->title }}" src="{{ App\Helpers\Helpers::storage($topic->image) }}">
                </div>
                <div class="post-content text-right" style="direction: rtl;">
                    {!! $topic->body !!}
                </div>
            </div>

            <div class="col-md-3">
				<div class="author widget border">
                    <img class="img-fluid" src="{{ asset('/user_style/images/author/author-bg.jpg') }}">
                    <div class="author-body text-center">
                        <div class="author-img">
                            <img style="width: 90px; border-radius: 100%; margin-top: -40px; border: 3px solid #fff;" src="{{ App\Helpers\Helpers::storage($topic->writer->image) }}">
                        </div>
                        <div class="author-bio">
                            <h3>{{ $topic->writer->name }}</h3>
                            <p>{{ $topic->writer->position->committee }} {{ $topic->writer->position->position }}</p>
                        </div>
                    </div>
                </div>
			</div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="comments">
                    @foreach ($comments as $comment)
                        <div style="border: 1px solid #dedede; padding: 30px 20px;">
                            <div class="row">
                                <div class="col-3 col-md-1">
                                    <img alt="" src="{{ asset('/user_style/images/avatar.svg') }}" class="media-object img-fluid">
                                </div>
                                <div class="col-9 col-md-11">
                                    
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                        {{ $comment->name }}</h5>
                                        <p class="text-muted">
                                            {{ $comment->created_at->diffForHumans() }}
                                        </p>
                                        <p>
                                            {!! $comment->body !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="post-comment">
                    <h3>Leave a Comment</h3>
                    <form role="form" action="{{ route('topic.comment', $topic->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                        	<div class="row">
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" required name="name" placeholder="Name">
	                            </div>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" required name="email" placeholder="Email">
	                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="row">
	                            <div class="col-md-12">
	                                <textarea class=" form-control" rows="8" required name="comment" placeholder="Leave your comment..."></textarea>
	                            </div>
                            </div>
                        </div>
                        <p>
                        </p>
                        <p>
                            <button class="btn btn-danger" type="submit">Comment</button>
                        </p>
                        
                        <p></p>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>   

@endsection

@section('footer')

@endsection