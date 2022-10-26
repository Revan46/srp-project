@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Manage Users</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
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
                      <button type="button" class="btn btn-danger btn-sm float-center" data-bs-toggle="modal" data-bs-target="#">
                        <i class="fa fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-success btn-sm float-center" data-bs-toggle="modal" data-bs-target="#">
                        <i class="fa fa-edit"></i>
                      </button>
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
</div>
@endsection