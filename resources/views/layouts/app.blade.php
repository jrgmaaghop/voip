<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'VOIP')}}  @isset($data['page_title']) | {{$data['page_title']}} @endisset </title>
  <!-- Favicon-->
  <link rel="icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

  <!-- Bootstrap -->
  <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{ asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href=" {{ asset('build/css/custom.min.css')}}" rel="stylesheet">

  @yield('css')

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      @include('includes.sidebar')
      @include('includes.topbar')
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>@isset($data['page_title']) {{$data['page_title']}} @endisset</h3>
            </div>
          </div>
          <div class="clearfix"></div>

          @yield('content')
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Developer: Jhone Ronelle Maaghop
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
  <!-- NProgress -->
  <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{ asset('build/js/custom.min.js') }}"></script>

  @yield('script')
</body>

</html>
