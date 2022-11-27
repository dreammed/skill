<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
{{-- <meta http-equiv="Content-Type" content="text/html; charset=tis-620"> --}}
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
{{-- @php
    ini_set('mssql.charset', 'TIS-620');
@endphp --}}
<title>PEA C1</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- Custom fonts for this template-->
{{-- <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" /> --}}

{{-- <link href="{{ asset('css/bootstrap-datetimepicker-build.css') }}" rel="stylesheet" type="text/css" /> --}}
<!-- Custom styles for this page -->
{{-- <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> --}}
{{-- <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css " rel="stylesheet"> --}}
{{-- <link href="{{ asset('css/print.scss') }}" rel="stylesheet" type="text/css" /> --}}
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

<style>
    /* Show it is fixed to the top */
    body {
        min-height: 75rem;
        padding-top: 4.5rem;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .modal-backdrop {
        --bs-backdrop-zindex: 1000;
    }
</style>
