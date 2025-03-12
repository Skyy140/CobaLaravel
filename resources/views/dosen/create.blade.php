@extends('layouts.index')

@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">DataTables.Net</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Tables</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Datatables</a>
          </li>
        </ul>
      </div>
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            {{-- <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">Add Row</h4>
                <button
                  class="btn btn-primary btn-round ms-auto"
                  data-bs-toggle="modal"
                  data-bs-target="#addRowModal"
                >
                  <i class="fa fa-plus"></i>
                  Add Row
                </button>
              </div>
            </div> --}}
            <div class="card-body">
              <form method="post" action="{{ route('dosenStore') }}">
                @csrf
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="text" name="nik" id="nik" placeholder="e.g. 2372045" maxlength="7" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="nama" id="nama" placeholder="e.g. John Doe" maxlength="100" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                  <label for="birth_date">Birth Date</label>
                  <input type="date" name="birth_date" id="birth_date" placeholder="e.g. DD_MM_YY" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" placeholder="e.g. @email.com" maxlength="45" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                  <button type="submit"> Save </button>
                </div>
              </form>
                
                

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('ExtraCSS')
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
@endsection

@section('ExtraJS')
@endsection