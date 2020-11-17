<!--
/**
 * Project: Entry Test For you.
 * Developer: SHAFQAT GHAFOOR
 * Phone: 03076110561
 * email: shafqatghafoor99@gmail.com
 * Date: 6/12/2018
 * Time: 6:30 PM
 */ -->

 <!DOCTYPE html>
 <html lang="{{ app()->getLocale() }}">
 <head>
   <base href="{{ url('/')}}">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   @section('metas')
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   @show


   <title> @yield('title','')-SLMS</title>


   @stack('pre-styles')

   @section('styles')




   <link rel="stylesheet" href="{{asset('adminAsset/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminAsset/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('adminAsset/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminAsset/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('adminAsset/dist/css/skins/_all-skins.min.css')}}">

  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('adminAsset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminAsset/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('adminAsset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">






  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">


   <link rel="shortcut icon" href="{{asset('images/logo.png')}}" />




   @show

   @stack('post-styles')



</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div id="app">
        <div class="wrapper">


            <x-admin-header-component></x-admin-header-component>
            <x-admin-side-bar-component></x-admin-side-bar-component>


            <div class="content-wrapper" id="main_content">
                @yield('content')
                @show
            </div>
        </div>

        <x-admin-footer-component></x-admin-footer-component>
    </div>


  @stack('pre-scripts')

  @section('scripts')

  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script src="{{asset('adminAsset/dist/js/adminlte.min.js')}}"></script>




 @show


 @stack('post-scripts')

</body>
</html>
