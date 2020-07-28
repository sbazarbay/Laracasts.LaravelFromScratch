@extends('layout')

@section('head')
	<title>Articles Page - Industrious by TEMPLATED</title>
@endsection

@section('content')
		<!-- Heading -->
			<div id="heading" >
				<h1>Articles</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Recent</h2>
						</header>
						@foreach($articles as $article)
							<hr>
							<h3>
								<a href="{{ $article->path() }}">
									{{ $article->title }}
								</a>
							</h3>
							<p>{{ $article->excerpt }}</p>
						@endforeach
					</div>
				</div>
			</section>
@endsection