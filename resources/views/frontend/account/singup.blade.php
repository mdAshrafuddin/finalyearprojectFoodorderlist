@extends('layouts.frontend.frontend_master')

@push('css')

@endpush

@section('content')
    <!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Sign Up</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- sign up-page -->
	<div class="login-page about">
		<img class="login-w3img" src="images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Sign Up to your account</h3>  
			<div class="login-agileinfo"> 
				<form action="{{ route('frontend.singup.store') }}" method="post"> 
					@csrf
					<input class="agile-ltext" type="text" name="name" placeholder="Username" required="">
					<input class="agile-ltext" type="email" name="email" placeholder="Your Email" required="">
					<input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
					<input class="agile-ltext" type="password" name="password_confirmation" placeholder="Confirm Password" required="">
					<div class="wthreelogin-text"> 
						<ul> 
							<li>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 
									<span> I agree to the terms of service</span> 
								</label> 
							</li> 
						</ul>
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="Sign Up">
				</form>
				<p>Already have an account?  <a href="{{ route('frontend.login') }}"> Login Now!</a></p> 
			</div>	 
		</div>
	</div>
@endsection

@push('script')

@endpush