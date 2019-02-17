{{-- header --}}
<div class="header">
			<div class="w3ls-header animated slideInLeft faster"><!-- header-one --> 
				<div class="container">
					<div class="w3ls-header-left">
						<p>Find your awesome food before you traveling</p>
					</div>
					<div class="w3ls-header-right">
						<ul> 
							<li class="head-dpdn">
								<i class="fa fa-phone" aria-hidden="true"></i> Call us: +880 1714 698 679
							</li> 


							<li class="head-dpdn">
								<a href="{{ route('frontend.login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
							</li> 
							<li class="head-dpdn">
								<a href="{{ route('frontend.singup') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
							</li> 
							<li class="head-dpdn">
								<a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- //header-one -->    
			<!-- navigation -->
			<div class="navigation agiletop-nav animated slideInRight faster">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<h1><a href="index.html">Awesome Food<span>The Best Food Collection</span></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
							
									<li><a href="{{route('frontend.home')}}" class="active">home</a></li>
									<li><a href="blog.html">blog</a></li>	
							
									
								<!-- Mega Menu -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cities <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>City</h6> 
													<li><a href="{{ route('frontend.sylhet') }}">Sylhet</a></li> 
													<li><a href="{{ route('frontend.dhaka') }}">Dhaka</a></li> 
													<li><a href="{{ route('frontend.khulna') }}">Khulna</a></li> 
													<li><a href="{{ route('frontend.rashahi') }}">Rajshahi</a></li> 
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li><a href="{{route('frontend.about')}}">About</a></li> 
								<li><a href="{{route('frontend.contact')}}">Contact Us</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>