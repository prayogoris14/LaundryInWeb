@extends('layout')
@section('content')
  @push('style')
  <link rel="stylesheet" href={{ asset('css/customer.css') }}>
  @endpush

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body d-flex flex-column gap-4">
      <div class="d-flex justify-content-between">
        <h2>Add New Customer</h2>
        <a href="{{ url('data-customer')}}" class="tbl-btn-add button btn-info p-2 rounded-2">Back to Table</a>
      </div>
      <form class="forms-sample" action="{{ url('data-customer',$data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <h6>Nama Lengkap <span class="text-danger">*</span></h6>
          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nama Lengkap..." name="nama" value="{{$data-> nama}}">
        </div>

        <div class="form-group">
          <h6>jenis Kelamin <span class="text-danger">*</span></h6>
          <select type="text" class="form-control" id="exampleInputUsername1" placeholder="Pilih Jenis Kelamin" name="jenis_kelamin" id="jenis_kelamin">
            <option selected value="{{ $data->id }}" disabled>{{ $data->jenis_kelamin }}</option>
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            </option>
          </select>
        </div>

        <div class="form-group">
          <h6>Nomor Telepon <span class="text-danger">*</span></h6>
          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Nomor Telepon..." name="notelp" value="{{$data-> notelp}}">
        </div>

        <div class="form-group">
          <h6>Alamat<span class="text-danger">*</span></h6>
          <textarea type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Alamat Lengkap..." name="alamat">{{$data->alamat}}</textarea>
        </div>
        <button type="submit" class="btn btn-success fw-semibold mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
@endsection
