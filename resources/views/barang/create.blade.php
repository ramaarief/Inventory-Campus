@extends('layouts.adminmain')

@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Barang <small>Add Data</small></h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('barang.index') }}"> 
              <button type="button" class="btn btn-outline-info">
                <i class="fas fa-arrow-circle-left"></i> Back
              </button>
          </a>
          </div>
          <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Ruangan</label><br>
                  <select name="ruangan_id" class="form-control">
                    @foreach($ruangan as $rg)
                    <option value="{{$rg->id}}">{{$rg->name}}</option>
                    @endforeach
                  </select> 
              </div>
              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Barang">
              </div>
              <div class="form-group">
                  <label>Total Barang</label>
                  <input name="total" type="number" class="form-control" id="inputTotal" placeholder="Total Barang">
              </div>
              <div class="form-group">
                  <label>Barang Rusak</label>
                  <input name="broken" type="number" class="form-control" id="inputBroken" placeholder="Barang Rusak">
              </div>
              <div class="form-group">
                <label for="photo">Upload Photo</label><br>
                <input type="file" name="photo" accept=".jpg, .png, .jpeg">
              </div>
                  <input type="hidden" name="created_by" value="{{auth()->user()->id}}">
              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">SAVE</button>
              </div>
              </form>
          </div>
        </div>
      </div>  
  </div>

</section>
@endsection()