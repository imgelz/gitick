@extends('layouts.Backend.Admin.index')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Collapsed Sidebar</h1>
          </div>
          <div class="col-sm-6">
            {{-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Collapsed Sidebar</li>
            </ol> --}}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="dataTable" class="table table-bordered table-striped dataTable">
                                        <thead class="thead">
                                            <tr>
                                                <th class="col-1">No</th>
                                                <th class="col-md-8">Judul</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    <tbody class="data-artikel">
                                    </tbody>
                                </table>
                            </div>
                <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('css')
<!-- DataTables -->
  <link rel="stylesheet" href="/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endsection

@section('js')

@endsection
