@extends('layouts.adminmain')

@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Fakultas</h4>
          </div>
          <div class="card-body">
            {{$fakultas}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Jurusan</h4>
          </div>
          <div class="card-body">
            {{$jurusan}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Ruangan</h4>
          </div>
          <div class="card-body">
            {{$ruangan}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Barang</h4>
          </div>
          <div class="card-body">
            {{$barang}}
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection()