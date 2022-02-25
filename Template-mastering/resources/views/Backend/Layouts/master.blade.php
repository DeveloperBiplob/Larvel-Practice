@extends('Backend.Layouts.app')
@section('app-content')
<div class="wrapper">

    <!-- Navbar -->
      @include('Backend.Partials.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
      @include('Backend.Partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="p-2">
        @if(session('message'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      @endif
      </div>
      <!-- Main content -->
      @yield('master-content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('Backend.Partials.footer')
</div>
  <!-- ./wrapper -->
@endsection
