@extends('layouts.frontend.frontend_master')

@push('css')

@endpush

@section('content')
  <!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Login</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- login-page -->
	<div class="login-page about">
		<img class="login-w3img" src="images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
			<div class="login-agileinfo"> 
				<form action="#" method="post"> 
					<input class="agile-ltext" type="email" name="email" placeholder="email" required="">
					<input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
					<div class="wthreelogin-text"> 
						<ul> 
							<li>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 
									<span> Remember me ?</span> 
								</label> 
							</li>
							<li><a href="#">Forgot password?</a> </li>
						</ul>
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="LOGIN">
				</form>
				<p>Don't have an Account? <a href="{{ route('frontend.singup') }}"> Sign Up Now!</a></p> 
			</div>	 
		</div>
	</div>
	<!-- //login-page -->     
@endsection

@push('script')

@endpush