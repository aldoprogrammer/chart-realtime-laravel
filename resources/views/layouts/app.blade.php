<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aldo Dashboard | Blank Page</title>
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="/dist/css/adminlte.min.css?v=3.2.0">

</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        @include('layouts.navbar')
        @include('layouts.sidebar')

        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('content-header')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">@yield('content-action')</li>
                                {{-- <li class="breadcrumb-item active">Blank Page</li> --}}
                            </ol>
                        </div>
                    </div>
                </div>
            </section>


        @yield('content')

        </div>

        @include('layouts.footer')

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>


    <script src="/plugins/jquery/jquery.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
