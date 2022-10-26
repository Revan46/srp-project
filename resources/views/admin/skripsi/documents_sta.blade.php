@extends('layouts.app', ['activePage' => 'documents_sta', 'titlePage' => __('Documents Skripsi & TA')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Data Skripsi & TA</h4>
            <p class="card-category">Laporan data Skripsi & TA</p>
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
                    File Buku
                  </th>
                  <th>
                    Nama Pembimbing
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Tipe Repository
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
                      $36,738
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
        <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Persyaratan Skripsi & TA') }}</h4>
                <p class="card-category">{{ __('Form persyaratan Skripsi & TA') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Syarat') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Syarat') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('File Syarat Poster Day') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control" name="" type="file" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Tipe Repository') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <select name="satuan" class="form-control @error('satuan') is-invalid @enderror">
                          <option value="gram">Poster Day</option>
                          <option value="Kg">Tugas Akhir</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
              </div>
            </div>
      </div>
    </div>
  </div>
</div>
@endsection