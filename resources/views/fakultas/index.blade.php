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
            </form>
            <a href="{{ route('fakultas.index') }}" class="pull-right">
              <button type="button" class="btn btn-info">All Data</button>
            </a>
          </div>
          <div class="card-header">
            <a href="{{ route('fakultas.create') }}">
              <button type="button" class="btn btn-primary">Add New</button>
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
               @forelse($fakultas as $fs)
                <tr>
                  <td>{{ $fs->id }}</td>
                  <td>{{ $fs->name }}</td>
                  <td>
                    <a href="{{ route('fakultas.edit', ['id' => $fs->id]) }}">
                      <button type="button" class="btn btn-sm btn-info">Edit</button>
                    </a>

                    <a href="{{ route('fakultas.delete', ['id' => $fs->id]) }}"
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
@endsection()