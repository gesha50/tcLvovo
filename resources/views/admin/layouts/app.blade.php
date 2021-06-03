<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
{{--    <meta name="description" content="@yield('description')" />--}}
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin/css/twitter-bootstrap-5.0.1.min.css')  }}">
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/bootstrap4.min.css')  }}" rel="stylesheet" crossorigin="anonymous" />
    <script src="{{ asset('admin/js/font-awesome-5.15.1.min.js')  }}" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
@include('admin.inc.topnav')
<div id="layoutSidenav">
    @include('admin.inc.sidenav')
    <div id="layoutSidenav_content">
        @include('flash::message')
        <main>
            @yield('content')
        </main>
        @include('admin.inc.footer')
    </div>
</div>
<script
    src="{{asset('admin/js/jquery-3.6.0.js')}}"

    crossorigin="anonymous"></script>
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
<script src="{{ asset('admin/js/Chart.min.js')  }}" crossorigin="anonymous"></script>
{{--<script src="{{ asset('admin/assets/demo/chart-area-demo.js') }}"></script>--}}
{{--<script src="{{ asset('admin/assets/demo/chart-bar-demo.js') }}"></script>--}}
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('admin/js/dataTables.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('admin/assets/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('admin/js/script.js') }}"></script>
</body>
</html>
