@extends('layout')

@section('head')
    <title>Contact Page - Industrious by TEMPLATED</title>
@endsection

@section('content')
	<!-- Heading -->
			<div id="heading" >
				<h1>Contact Us</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<h3>Form</h3>
						<p>Fill in the contact form below to contact me!</p>
						<form method="post" action="/contact">
						@csrf
							<div class="row gtr-uniform">
								<div class="col-6 col-12-small">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								@error('email')
									<div style="color:red">{{ $message }}</div>
								@enderror
								</div>
								<!-- Break -->
								{{-- <div class="col-12">
									<textarea name="textarea" id="textarea" placeholder="Enter your message here..." rows="6"></textarea>
								</div> --}}
								<!-- Break -->
								<div class="col-12">
									<input type="submit" value="Email Me 👍" class="primary" />
								</div>
							@if(session('message'))
								<div style="color:green">
									{{ session('message') }}
								</div>
							@endif
							</div>
						</form>
					</div>
				</div>
			</section>
@endsection