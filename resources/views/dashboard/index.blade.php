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
          <i class="far fa-building"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Fakultas</h4>
          </div>
          <div class="card-body">
            {{$fakultas}} <br>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Jurusan</h4>
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
          <i class="fas fa-school"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Ruangan</h4>
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
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Barang</h4>
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