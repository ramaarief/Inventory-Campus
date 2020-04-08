@extends('layouts.adminmain')

@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>
      Barang <small>Edit Data</small>
    </h1>
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
            <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="post" enctype="multipart/form-data">
              @method('patch')
              @csrf
              <div class="form-group">
                <label>Ruangan</label><br>
                <select name="ruangan_id" class="form-control" required="">
                  @foreach($ruangan as $rg)
                  <option value="{{ $rg->id }}" {{ ($barang->ruangan_id == $rg->id) ? 'selected' : ''}}>{{ $rg->name }}</option>
                  @endforeach
                </select>
              </div>   
              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="name" class="form-control" value="{{ $barang->name }}" required="">
              </div>
              <div class="form-group">
                <label>Total Barang</label>
                <input type="number" min="1" name="total" class="form-control" value="{{ $barang->total }}">
              </div>
              <div class="form-group">
                <label>Barang Rusak</label>
                <input type="number" min="0" name="broken" class="form-control" value="{{ $barang->broken }}">
              </div>
                <input type="hidden" name="created_by" value="{{ $barang->created_by }}">
                <input type="hidden" name="updated_by" value="{{auth()->user()->id}}">
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