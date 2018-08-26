@extends('user.layouts.layout')

@section('title')
	K'19 Magazine
@endsection

@section('head')
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
	<link href="{{ asset('/user_style/css/froala/froala_style.min.css') }}" rel="stylesheet" />
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
                    <h2 style="font-family: 'Aref Ruqaa', serif; font-size: 60px">أركان</h2>
                    @if (Route::current()->getName() == 'k19.magazine.month')
                    	<h2 style="font-family: 'Aref Ruqaa', serif;">شهر {{ $dt->locale('ar')->monthName }}</h2>
                    @elseif (Route::current()->getName() == 'k19.magazine.headline')
                    	<h2 style="font-family: 'Aref Ruqaa', serif;">عنوان {{ $headline->name }}</h2>
                    @endif
                </div>
                <div class="text-center">Enrich your knowledge and enjoy the beauty of words.</div>
            </div>
        </div>
    </div>
</section>


<!--=======================================
=            Blog Left sidebar            =
========================================-->

<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="categories widget">
                        <h3 class="widget-head">Headlines</h3>
                        <ul>
                        	@foreach ($headlines as $headline)
	                            <a href="{{ route('k19.magazine.headline', $headline->id) }}">
	                            	<li>
	                                	{{ $headline->name }}
	                                	<span class="badge">
	                                		{{ $headline->topics ? count($headline->topics) : 0 }}
	                                	</span>
	                            	</li>
	                            </a>
                        	@endforeach
                        </ul>
                    </div>

                    <div class="categories widget">
                        <h3 class="widget-head">Months</h3>
                        <ul>
                        	@foreach ($months as $month => $value)
	                            <a href="{{ route('k19.magazine.month', $month) }}">
	                            	<li>
	                                	{{ Carbon\Carbon::now()->setMonth($month)->locale('ar')->monthName }}
	                                	<span class="badge">
	                                		{{ count($value) }}
	                                	</span>
	                            	</li>
	                            </a>
                        	@endforeach
                        </ul>
                    </div>
                        
                        <div class="recent-post widget">
                            <h3>Recent Topics</h3>
                            <ul>
                            	@foreach ($recentTopics as $recentTopic)
	                                <li>
	                                    <a href="{{ route('k19.magazine.topic', $recentTopic->id) }}">{{ $recentTopic->title }}</a><br>
	                                    <time>{{ Carbon\Carbon::parse($recentTopic->publish)->toDayDateTimeString() }}</time>
	                                </li>
                            	@endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                	@foreach ($topics as $topic)
	                    <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
	                        <div class="blog-post-image">
	                            <a href="{{ route('k19.magazine.topic', $topic->id) }}"><img class="img-fluid" src="{{ Storage::disk('local')->url($topic->image) }}" alt="{{ $topic->title }}" /></a>
	                        </div>
	                        <div class="blog-content">
	                            <h2 class="blogpost-title">
	                            <a href="{{ route('k19.magazine.topic', $topic->id) }}">{{ $topic->title }}</a>
	                            </h2>
	                            <div class="blog-meta">
	                                <span>{{ Carbon\Carbon::parse($topic->publish)->toDayDateTimeString() }}</span>
	                                <span>by {{ $topic->writer->name }}</span>
	                                <span><a href="{{ route('k19.magazine.headline', $topic->headline->id) }}">{{ $topic->headline->name }}</a></span>
	                            </div>
	                            <p class="fr-view">{!! substr($topic->body, 0, 600) !!}...
	                            </p>
	                        </div>
	                        <a href="{{ route('k19.magazine.topic', $topic->id) }}" class="btn btn-danger">Continue Reading</a>
	                    </article>
                	@endforeach
                </div>
            </div>
        </div>
</section>

<!--====  End of Blog Left sidebar  ====--> 

@endsection

@section('footer')

@endsection