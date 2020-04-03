@extends('layouts.adminmain')

@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Jurusan</h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <form method="GET" class="form-inline">
              <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama fakultas" value="{{ request()->get('search') }}" style="width: 230px;">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
            <a href="{{ route('jurusan.index') }}" class="pull-right">
              <button type="button" class="btn btn-info">All Data</button>
            </a>
          </div>
          <div class="card-header">
            <a href="{{ route('jurusan.create') }}">
              <button type="button" class="btn btn-primary">Add New</button>
            </a>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Fakultas</th>
                  <th scope="col">Nama Jurusan</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               @forelse($jurusan as $js => $hasil)
                <tr>
                  <td>{{ $js + $jurusan->firstitem() }}</td>
                  <td>
                    @foreach($fakultas as $fs)
                        @if($hasil->fakultas_id == $fs->id)
                          {{ $fs->name }}
                        @endif
                      @endforeach
                  </td>
                  <td>{{ $hasil->nama_jurusan }}</td>
                  <td>
                    <a href="{{ route('jurusan.edit', ['id' => $hasil->id]) }}">
                      <button type="button" class="btn btn-sm btn-info">Edit</button>
                    </a>

                    <a href="{{ route('jurusan.delete', ['id' => $hasil->id]) }}"
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
            Jumlah Data Jurusan =
            {{ $jurusan->total() }}
            <h6 class="page-title">Page Number</h6>
                        {{ $jurusan->links() }}
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