@extends('layout')

@section('head')
	<title>{{ $article->title }} - Industrious by TEMPLATED</title>
@endsection

@section('content')
		<!-- Heading -->
			<div id="heading" >
				<h1></h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>{{ $article->title }}</h2>
						</header>
						<p>{{ $article->body }}</p>
					</div>
				</div>
			</section>
@endsection