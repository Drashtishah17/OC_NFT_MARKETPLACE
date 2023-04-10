@extends('layouts.app')
@section('title', 'Admin Details')

@section('content')
<div class="content-header"  style="background-color: lavender">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Admin Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6" >
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Admin Details</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('body')
  <!-- Main row -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Admin Profile</h3>
            </div>
              @if(session('status'))
                   <div class="alert alert-success" role="alert">
                      {{ session('status') }} 
                   </div>
              @endif
            <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Admin Id</th>
                      <th>Admin Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      {{-- <th>Edit</th> --}}
                      {{-- <th>Delete</th> --}}
                    </tr>
                    </thead>
                  <tbody>
                    @foreach ($admins as $value )
                    <tr>
                        <td>{{ $value->user_id }}</td>
                        <td>{{ $value->username }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->role}}</td>
                        {{-- <td>
                            <a href="/role-edit/{{ $value->user_id }}" class="btn btn-success">Edit</a>
                        </td> --}}
                        {{-- <td>
                          <form action="/role-delete/{{ $value->user_id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }} 
                            <button type="button" class="btn btn-danger">Delete</a>
                          </form> 
                      </td> --}}
                    </tr>
                        
                    @endforeach 
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
</section>
  <!-- /.card -->
  @endsection
  @section('scripts')
        <script>
          $(docunment).ready(function () {
            $("#example1").DataTable({
              "responsive": true, "lengthChange": false, "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
          });
        </script>

@endsection