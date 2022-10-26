@extends('layouts.app', ['activePage' => 'validasi_sta', 'titlePage' => __('Validasi Skripsi dan TA')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Validasi Skripsi dan Tugas Akhir</h4>
            <p class="card-category">Data validasi</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    NPM
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Prodi
                  </th>
                  <th>
                    Judul
                  </th>
                  <th>
                    File Pengesahan
                  </th>
                  <th>
                    File Buku
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-primary">
                      <button type="button" class="btn btn-danger btn-sm float-center" data-bs-toggle="modal" data-bs-target="#">
                        <i class="fa fa-trash"></i>
                      </button>
                    </td>
                    <td class="text-primary">
                      <button type="button" class="btn btn-danger btn-sm float-center" data-bs-toggle="modal" data-bs-target="#">
                        <i class="fa fa-trash"></i>
                      </button>
                    </td>
                    <td class="text-primary">
                      $36,738
                    </td>
                    <td class="text-primary">
                      <button type="button" class="btn btn-danger btn-sm float-center" data-bs-toggle="modal" data-bs-target="#">
                        <i class="fa fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection