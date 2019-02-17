@include('layouts.admin.partial.header')
@include('layouts.admin.partial.navbar')
@include('layouts.admin.partial.siteMenubar')

 <!-- Page -->
    <div class="page">
      <div class="page-content">
         @yield('content')
      </div>
    </div>
    <!-- End Page -->
    
 @include('layouts.admin.partial.footer')


