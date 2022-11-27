<html lang="en">

<head>

    @include('layout.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @include('layout.navbar')
            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="d-flex flex-row">
                    <div class="border" style="background-color: 865FDE;">
                        @include('layout.sidebar')
                    </div>
                    <div class="container-fluid p-5">
                    {{-- <div class="container-fluid"> --}}

                        @yield('content')
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('layout.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('layout.js')

</body>

</html>
