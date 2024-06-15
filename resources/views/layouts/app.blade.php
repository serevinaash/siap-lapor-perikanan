<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{url('/frontend/argon/assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{url('/frontend/argon/assets/img/favicon.png')}}">
        <title>
            Siap Lapor
        </title>    
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="/frontend/argon/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/frontend/argon/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="/frontend/argon/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="/frontend/argon/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />  <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!--- Tambahkan setelah app.css --->
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
        <style>
            /*Form fields*/
            .dataTables_wrapper select,
            .dataTables_wrapper .dataTables_filter input {
                color: #4a5568;    /*text-gray-700*/
                padding-left: 1rem;   /*pl-4*/
                padding-right: 1rem;   /*pl-4*/
                padding-top: .5rem;   /*pl-2*/
                padding-bottom: .5rem;   /*pl-2*/
                line-height: 1.25;    /*leading-tight*/
                border-width: 2px;    /*border-2*/
                border-radius: .25rem;   
                border-color: #edf2f7;   /*border-gray-200*/
                background-color: #edf2f7;  /*bg-gray-200*/
            }
            /*Row Hover*/
            table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
                background-color: #ebf4ff; /*bg-indigo-100*/
            }
            /*Pagination Buttons*/
            .dataTables_wrapper .dataTables_paginate .paginate_button  {
                font-weight: 700;    /*font-bold*/
                border-radius: .25rem;   /*rounded*/
                border: 1px solid transparent; /*border border-transparent*/
            }
            /*Pagination Buttons - Current selected */
            .dataTables_wrapper .dataTables_paginate .paginate_button.current {
                color: #fff !important;    /*text-white*/
                box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);  /*shadow*/
                font-weight: 700;     /*font-bold*/
                border-radius: .25rem;    /*rounded*/
                background: #667eea !important;  /*bg-indigo-500*/
                border: 1px solid transparent;  /*border border-transparent*/
            }
            /*Pagination Buttons - Hover */
            .dataTables_wrapper .dataTables_paginate .paginate_button:hover  {
                color: #fff !important;    /*text-white*/
                box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);  /*shadow*/
                font-weight: 700;     /*font-bold*/
                border-radius: .25rem;    /*rounded*/
                background: #667eea !important;  /*bg-indigo-500*/
                border: 1px solid transparent;  /*border border-transparent*/
            }
            /*Add padding to bottom border */
            table.dataTable.no-footer {
                border-bottom: 1px solid #e2e8f0; /*border-b-1 border-gray-300*/
                margin-top: 0.75em;
                margin-bottom: 0.75em;
            }
            /*Change colour of responsive icon*/
            table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
                background-color: #667eea !important; /*bg-indigo-500*/
            }
        </style>
        @livewireStyles

        <!-- Scripts -->
        {{-- <script src="{{mix("/js/app.js")}}" defer></script> --}}
        <!--- Tambahkan setelah app.js --->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="/frontend/argon/js/core/popper.min.js"></script>
    <script src="/frontend/argon/js/core/bootstrap.min.js"></script>
    <script src="/frontend/argon/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/frontend/argon/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/frontend/argon/js/plugins/chartjs.min.js"></script>
   <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
        damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/frontend/argon/js/argon-dashboard.min.js?v=2.0.4"></script>
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="g-sidenav-show bg-gray-100">
    <x-jet-banner />
        @livewire('navigation-menu')

        <!-- Page Heading -->
     

        <!-- Page Content -->
             
         {{ $slot }}
   

        @stack('modals')

        @livewireScripts
        {{-- <!--- Tambahkan setelah @livewireScripts ---> --}}
        {{ $script ?? '' }}
    </body>
</html>