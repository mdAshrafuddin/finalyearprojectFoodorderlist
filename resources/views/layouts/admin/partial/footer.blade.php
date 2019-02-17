    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="{{asset('admin/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('admin/vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('admin/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('admin/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('admin/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    <script src="{{asset('admin/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
    
    <!-- Plugins -->
    <script src="{{asset('admin/vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('admin/vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('admin/vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{asset('admin/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
    
    <!-- Scripts -->
    <script src="{{asset('admin/js/Component.js')}}"></script>
    <script src="{{asset('admin/js/Plugin.js')}}"></script>
    <script src="{{asset('admin/js/Base.js')}}"></script>
    <script src="{{asset('admin/js/Config.js')}}"></script>
    
    <script src="{{asset('admin/js/Section/Menubar.js')}}"></script>
    <script src="{{asset('admin/js/Section/GridMenu.js')}}"></script>
    <script src="{{asset('admin/js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('admin/js/Section/PageAside.js')}}"></script>
    <script src="{{asset('admin/js/Plugin/menu.js')}}"></script>
    
    <script src="{{asset('admin/js/config/colors.js')}}"></script>
    <script src="{{asset('admin/js/config/tour.js')}}"></script>
    {{-- <script>Config.set('admin' '/admin');</script> --}}
    <script src="{{asset('admin/summernote/summernote.min.js')}}"></script>
     <script src="{{asset('admin/summernote/summernote-bs4.js')}}"></script>
     <script src="{{asset('admin/summernote/summernote-lite.js')}}"></script>
    <!-- Page -->
    <script src="{{asset('admin/js/Site.js')}}"></script>
    <script src="{{asset('admin/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('admin/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('admin/js/Plugin/switchery.js')}}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.10/dist/sweetalert2.all.min.js"></script>
   <script src="{{asset('admin/vendor/multi-select/jquery.multi-select.js')}}"></script>
   <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);

//summernote
      $(document).ready(function() {
        $('#summernote').summernote({
           height: 300,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          focus: true                  // set focus to editable area after initializing summernote
        });

        
      });
    </script>
   @stack('script') 
  </body>
</html>
