<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Food order List</title>
    
    <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/site.min.css')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-select/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/flag-icon-css/flag-icon.css')}}"  >
    <link rel="stylesheet" href="{{asset('admin/summernote/summernote-bs4.css')}}"  >
    <link rel="stylesheet" href="{{asset('admin/summernote/summernote-lite.css')}}"  >
    
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('admin/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.10/dist/sweetalert2.min.css" rel="stylesheet" />
    <!--[if lt IE 9]>
    <script src="vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="{{asset('admin/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
      Breakpoints();
    </script>
    @stack('css')
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->