@extends('user.layouts.layout')

@section('title')
	K'19 Magazine
@endsection

@section('head')
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
                    <h2 style="font-family: 'Aref Ruqaa', cursive; font-size: 60px">أرْكَانْ</h2>
                    @if (Route::current()->getName() == 'k19.magazine.month')
                    	<h2 style="font-family: 'Aref Ruqaa', cursive;">شهر {{ $dt->locale('ar')->monthName }}</h2>
                    @elseif (Route::current()->getName() == 'k19.magazine.headline')
                    	<h2 style="font-family: 'Aref Ruqaa', cursive;">عنوان {{ $headline->name }}</h2>
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
                	<div class="row">
						@php
						$i = 0; 
						@endphp
						@foreach ($topics as $topic) 
							<article class="col-sm-4 wow fadeInDown" data-wow-delay="{{ .3 + (.25 * $i) . 's'}}" data-wow-duration="500ms">
								<div class="card">
									<a href="{{ url('k19/magazine/t/' . $topic->id) }}">
										<img class="card-img-top" src="{{ App\Helpers\Helpers::storage($topic->image)}}" alt="{{ $topic->writer->name}}">
									</a>
									<div class="card-body">
										<a href="{{ url('k19/magazine/h/' . $topic->headline->id) }}">
											<span class="float-right badge badge-primary">{{ $topic->headline->name}}</span>
										</a>
										<br>
										<a href="{{ url('k19/magazine/t/' . $topic->id) }}">
											<h5 class="card-title text-truncate" dir="rtl" title="{{ $topic->title }}" style="font-family: 'Cairo', sans-serif;">{{ $topic->title }}</h5>
										</a>
										<p class="card-text text-muted">
											<i class="fa fa-eye"></i> {{ $topic->views}} Veiws
											<br>
											<i class="fa fa-comment"></i> {{ count($topic->comments)}} Comments
											<br>
											<img class="avatar" src="{{ ($topic->writer->image)? App\Helpers\Helpers::storage($topic->writer->image) : asset('/user_style/images/avatar.jpg')}}" alt="{{ $topic->writer->name}}" data-toggle="tooltip" data-placement="top" title="{{ $topic->writer->position->committee}} {{ $topic->writer->position->position}}"> {{ $topic->writer->name}}
										</p>
										<a href="{{ url('k19/magazine/t/' . $topic->id) }}" class="btn btn-primary">Continue Reading</a>
									</div>
								</div>
							</article>
						@php 
							$i++;
						@endphp
						@endforeach
					</div>
                </div>
            </div>
        </div>
</section>

<!--====  End of Blog Left sidebar  ====--> 

@endsection

@section('footer')

@endsection