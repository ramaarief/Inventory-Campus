@extends('layouts.adminmain')

@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Fakultas</h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <form method="GET" class="form-inline">
              <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
              <div class="form-group">
                <a href="{{ route('fakultas.index') }}" class="pull-right">
                  <button type="button" class="btn btn-info">All Data</button>
                </a>
              </div>
            </form>
          </div>
          <div class="card-header">
            <a href="{{ route('fakultas.create') }}">
              <button type="button" class="btn btn-primary">Add New</button>
            </a>
            <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importExcel" style="color: #fff;">
              Import Data
            </a>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Fakultas</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               @forelse($fakultas as $fs => $hasil)
                <tr>
                  <td>{{ $fs + $fakultas->firstitem() }}</td>
                  <td>{{ $hasil->name }}</td>
                  <td>
                    <a href="{{ route('fakultas.edit', ['id' => $hasil->id]) }}">
                      <button type="button" class="btn btn-sm btn-info">Edit</button>
                    </a>

                    <a href="{{ route('fakultas.delete', ['id' => $hasil->id]) }}"
                      onclick="return confirm('Delete data?');" 
                      >
                      <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                    </a>
                  </td>
                </tr>
               @empty
                <tr>
                  <td colspan="3"><center>Data kosong</center></td>
                </tr>
                @endforelse
              </tbody>
            </table>
            Jumlah Data Fakultas =
            {{ $fakultas->total() }}
            <h6 class="page-title">Page Number</h6>
                        {{ $fakultas->links() }}
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              
            </nav>
          </div>
        </div>
      </div>  
  </div>

</section>

  <!-- Modal -->
    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="importExcel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="{{ route('fakultas.import') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import Data Fakultas</h5>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <label for="file">File Excel</label><br>
                  <input type="file" name="excel" accept=".xlsx, .xls" required="">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Import</button>
            </div>
          </form>
        </div>
      </div>
    </div>

@endsection()



