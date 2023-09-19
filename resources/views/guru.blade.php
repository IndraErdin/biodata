@extends('adminlte')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Dashboard</h3>
  
          </div>
          <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
            @endif
            <a href="{{ route('guru.create') }}" class="btn btn-success">Tambah Data</a>
            <br><br>
              <table class="table table-striped table-bordered">
                <tr>
                  <th>Nip</th>
                  <th>Nama</th>
                  <th>Mapel</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($guruM as $guru)
                <tr>
                  <td>{{  $guru ->nip  }}</td>
                  <td>{{  $guru ->nama_guru  }}</td>
                  <td>{{  $guru ->mapel  }}</td>
                  <td>
                    <a href="{{ route ('guru.edit', $guru->id) }}" class="btn btn-xs btn-warning">Edit</a>
                    <form action="{{ route('guru.destroy', $guru->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </table>
          </div>
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
@endsection