@include('layouts.frontend.partial.frontend_header')
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		@include('layouts.frontend.partial.frontend_navbar')
		<!-- //header-end --> 
		@include('layouts.frontend.partial.frontend_banner')
		
		@yield('content')
	<!-- //dishes --> 
	<!-- subscribe -->
	@include('layouts.frontend.partial.frontend_subscriber')
	<!-- //subscribe --> 
	<!-- footer -->
	@include('layouts.frontend.partial.frontend_footer')
	<!-- //footer --> 
	@include('layouts.frontend.partial.frontend_bottom')