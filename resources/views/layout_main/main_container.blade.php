<!doctype html>
<html class="no-js" lang="en"><meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/pace-theme-big-counter.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/main-style.css')}}" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="{{asset('assets/css/morris-0.4.3.min.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
   </head>
    <body>
        <div id="wrapper">
            @section('header')
            @include('layout_main.header')

            @section('menu')
            @include('layout_main.menu')

            <div id="page-wrapper">
            @yield('body')
            </div>
            @section('footer')
            @include('layout_main.footer')

        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('assets/js/pace.js')}}"></script>
    <script src="{{asset('assets/js/siminta.js')}}"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="{{asset('assets/js/raphael-2.1.0.min.js')}}"></script>
    {{-- <script src="{{asset('assets/js/dashboard-demo.js')}}"></script> --}}
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    </body>
</html>
