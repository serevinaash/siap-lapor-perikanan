@extends("layouts.frontend")
@section("content")
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

<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade" style="background-image: url('{{ asset("/frontend/lp/img/page-title-bg.jpeg") }}')">
 <div class="container position-relative">
    <h1>Report Data</h1>
    <p>Report Produksi Perikanan.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">Starter Page</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Starter Section Section -->
<section id="starter-section" class="starter-section section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <span>Download Reports<br></span>
    <h2>Download Reports</h2>
    <p>Download laporan</p>
  </div><!-- End Section Title -->
  <div class="py-4 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 bg-white sm:p-6">
                    <table id="crudTable" class="text-center w-full">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Ikan</th>
                                <th>Jumlah Produksi</th>
                                <th>Tanggal Produksi</th>
                                <th>Lokasi Produksi</th>
                                <th>Harga Ikan</th>
                                <th>Pengola Produksi</th>
                                <th>Status Produksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="container mt-5 text-left">
                    <form action="" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="col-lg-9">
    <div class="blog-wrap">
      <div class="blog-row-block">
        <div class="blog-row-border">
          <div class="row">
            <div class="col-md-2">
              <div class="blog-img">
                <img src="https://dlhkp.kebumenkab.go.id/ui/icon/pdf.png" class="img-fluid" alt="#">
              </div>
            </div>
            <div class="col-md-7 d-flex align-items-center">
              <div class="blog-content">
                <span>Oleh Petugas Perikanan</span>
                <h3>Data Terupdate</h3>
                <p class="mb-0">unduh laporan perikanan</p>
              </div>
            </div>
            <div class="col-md-3 d-flex align-items-center">
              <div class="blog-read-more">
                <p><i class="fas fa-download"></i>Diunduh 0 Kali<span></span></p>
                <a href="{{ route('exportpdf-users') }}" class="btn btn-primary">DOWNLOAD</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            var dataTable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! route('download') !!}'
                },
                columns: [
                    {data: null, name: 'No.', searchable: false, sortable: false,
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {data: 'Nama_Ikan', name: 'Nama_Ikan'},
                    {data: 'Jumlah_Produksi', name: 'Jumlah_Produksi'},
                    {data: 'Tanggal_Produksi', name: 'Tanggal_Produksi'},
                    {data: 'Lokasi_Produksi', name: 'Lokasi_Produksi'},
                    {data: 'Harga_Ikan', name: 'Harga_Ikan'},
                    {data: 'Pengola_Name', name: 'Pengola_Name'},
                    {data: 'Status_Produksi', name: 'Status_Produksi'},
                ]
            });
        </script>

  @endsection
