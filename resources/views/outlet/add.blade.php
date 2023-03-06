@extends('layout')

@section('content')
  @push('style')
  <link rel="stylesheet" href={{ asset('css/owner.css') }}>
  @endpush

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body d-flex flex-column gap-4">
      <div class="d-flex justify-content-between">
        <h2>Add New Outlet</h2>
        <a href="{{ url('data-outlet')}}" class="tbl-btn-add button btn-info p-2 rounded-2">Back to Table</a>
      </div>
      <form class="forms-sample" action="{{ url('data-outlet')}}" method="POST">
        @csrf
        <div class="form-group">
          <h6>Nama Outlet <span class="text-danger">*</span></h6>
          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama Outlet..." name="nama">
        </div>

        <div class="form-group">
          <h6>Nomor Telepon <span class="text-danger">*</span></h6>
          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nomor Telepon..." name="notelp">
        </div>

        <div class="form-group">
          <h6>Alamat<span class="text-danger">*</span></h6>
          <textarea type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Alamat Lengkap..." name="alamat" ></textarea>
        </div>
        <button type="submit" class="btn btn-success fw-semibold mr-2">Submit</button>
        <a href="{{url ('/data-customer')}}" class="btn btn-light">Cancel</a>
      </form>
    </div>
  </div>
</div>
@endsection