@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title float-left">Manage Users</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
            <button type="button" class="btn btn-success btn-sm ml-lg-auto float-right" data-bs-toggle="modal" data-bs-target="#form">
              Add &nbsp; <i class="fa fa-plus"></i>
            </button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th class="text-center">
                    Name
                  </th>
                  <th class="text-center">
                    Email
                  </th>
                  <th class="text-center">
                    Level
                  </th>
                  <th class="text-center">
                    Action
                  </th>
                </thead>
                <tbody>
                  @foreach($user as $item)
                  <tr>
                    <td class="text-center">{{$item['name']}}</td>
                    <td class="text-center">{{$item['email']}}</td>
                    <td class="text-center">{{$item['level']}}</td>
                    <td class="text-center">
                    @if ($item->level!="admin")
                    <a href="/users/{{$item->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')"><i class="fa fa-trash"></i></a>
                    @endif
                      <!-- <button type="button" class="btn btn-success btn-sm float-center" data-bs-toggle="modal" data-bs-target="#">
                        <i class="fa fa-edit"></i>
                      </button> -->
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal add -->
  <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Tambah Pengguna
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/users/create" method="POST">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Nama</label>
              <input name="name" type="text" class="form-control @error('name') is-invalid @enderror">
              @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Email</label>
              <input name="email" type="email" class="form-control @error('email') is-invalid @enderror">
              @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Level</label>
              <select name="level" class="form-select @error('level') is-invalid @enderror">
                <option value="">- Pilih -</option>
                <option value="dosen">Dosen</option>
                <option value="mahasiswa">Mahasiswa</option>
              </select>
              @error('level')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection