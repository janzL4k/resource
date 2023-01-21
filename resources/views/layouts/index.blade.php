<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Website Seleksi GenBI &mdash; 2022</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/school.svg') }}" type="image/x-icon">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.4.0/css/autoFill.dataTables.min.css"/>--}}

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('layouts.navbar')
            @include('layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">

                    @yield('content')
                </section>
            </div>

            @include('layouts.footer')
        </div>
<script>
            //active select2
            $(document).ready(function () {
                $('select').select2({
                    theme: 'bootstrap4',
                    width: 'style',
                });
            });
            $(document).ready(function () {
                $('#table-1').DataTable();
            });
</script>
        //flash message

        @if (session()->has('success'))
            <script>
                swal({
                    type: "success",
                    icon: "success",
                    title: "BERHASIL!",
                    text: "{{ session('success') }}",
                    timer: 1500,
                    showConfirmButton: false,
                    showCancelButton: false,
                    buttons: false,
                });
            </script>
        @endif
        @if (session()->has('error'))
            <script>
                swal({
                    type: "error",
                    icon: "error",
                    title: "GAGAL!",
                    text: "{{ session('error') }}",
                    timer: 1500,
                    showConfirmButton: false,
                    showCancelButton: false,
                    buttons: false,
                });
            </script>
            @endif


    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
{{--    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>--}}
{{--    <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.4.0/js/dataTables.autoFill.min.js"></script>--}}

     <!-- Template JS File -->
     <script src="{{ asset('assets/js/scripts.js') }}"></script>
     <script src="{{ asset('assets/js/custom.js') }}"></script>

</div>
</body>
@stack('script')
</html>
