@extends('layout.public')
@section("title")
    <title>Qorrah | Contact</title>
    <meta name="description" content="a platform that provides the link between students who are looking for specialized training
 with institutions that have training vacancies">
 <meta name="keywords" content="Qorrah, Contact, Training">

@endsection
@section('content')


<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Contact</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li>Contact</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="row">

		<div class="col-xl-12">
			<div class="contact-location-info margin-bottom-50">
				<div class="contact-address">
					<ul>
						{!! $manage->contactinfo !!}
						<li>
							<div class="freelancer-socials">
								<ul>
									<li><a href="{{$manage->facebook}}" target="_blank" title="facebook" data-tippy-placement="top"><i class="icon-brand-facebook"></i></a></li>
									<li><a href="{{$manage->linkedin}}"  target="_blank" title="linkedin" data-tippy-placement="top"><i class="icon-brand-linkedin"></i></a></li>
									<li><a href="{{$manage->twitter}}"  target="_blank" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
									<li><a href="{{$manage->instagram}}"  target="_blank" title="Instagram" data-tippy-placement="top"><i class="icon-brand-instagram"></i></a></li>
								
								</ul>
							</div>
						</li>
					</ul>

				</div>
				<div id="single-job-map-container">
					<div id="singleListingMap" data-latitude="31.966874" data-longitude="35.881324" data-map-icon="im im-icon-Hamburger"></div>
					<a href="#" id="streetView">Street View</a>
				</div>
			</div>
		</div>

		<div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">

			<section id="contact" class="margin-bottom-60">
				<h3 class="headline margin-top-15 margin-bottom-35">Any questions? Feel free to contact us!</h3>
				@if (count($errors) > 0)
				<div class="alert alert-danger">
				 <button type="button" class="close" data-dismiss="alert">×</button>
				 <ul>
				  @foreach ($errors->all() as $error)
				   <li>{{ $error }}</li>
				  @endforeach
				 </ul>
				</div>
			   @endif
				<form method="post" name="contactform" id="contactform" action="{{ route('contact') }}" autocomplete="on">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="input-with-icon-left">

								@if (Auth::check())
									
								<input class="with-border" name="name" type="text" id="name" placeholder="Your Name" value="{{Auth::user()->name}}" required="required" />
								@else 
								<input class="with-border" name="name" type="text" id="name" placeholder="Your Name" required="required" />
								@endif

								<i class="icon-material-outline-account-circle"></i>
							</div>
						</div>

						<div class="col-md-6">
							<div class="input-with-icon-left">
								@if (Auth::user())

								<input class="with-border" name="email" type="email" id="email" placeholder="Email Address" value="{{Auth::user()->email}}" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
								@else 
								<input class="with-border" name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
									
								@endif
								<i class="icon-material-outline-email"></i>
							</div>
						</div>
					</div>

					<div class="input-with-icon-left">
						<input class="with-border" name="subject" type="text" id="subject" placeholder="Subject" required="required" />
						<i class="icon-material-outline-assignment"></i>
					</div>

					<div>
						<textarea class="with-border" name="comments" cols="40" rows="5" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
					</div>

					<input type="submit" class="submit button margin-top-15" id="submit" value="Submit Message" />

				</form>
			</section>

		</div>

	</div>
</div>
<!-- Container / End -->

   
    @endsection
 