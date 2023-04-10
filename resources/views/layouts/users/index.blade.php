@extends('layouts.app')
@section('title', 'Users List')

@section('content')
<div class="content-header"  style="background-color: lavender">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6" >
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Users List</li>
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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Users List</h3>
              <div class="row">
                
              </div>  
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
                  <th>User Id</th>
                  <th>User Name</th>
                  <th>Email</th>
                  {{-- <th>Role</th> --}}
                  {{-- <th>salt</th> --}}
                  <th>Status</th>
                  {{-- <th>Created_at</th> --}}
                  <th>View</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($users as $row )
                  <tr>
                      <td>{{ $row->user_id }}</td>
                      <td>{{ $row->username }}</td>
                      <td>{{ $row->email }}</td>
                      {{-- <td>{{ $row->role }}</td> --}}
                      {{-- <td>{{ $row->salt }}</td> --}}
                      <td>{{ $row->is_verified == '0' ? 'In-active':'Active' }}</td>
                      {{-- <td>{{ $row->created_at }}</td> --}}
                      <td>
                          <a href="/view-user/{{ $row->user_id }}" class="btn btn-primary btn-sm">View</a>
                      </td>
                      <td>
                        {{-- <form action="/user-delete/{{ $row->user_id }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                        </form> --}}
                        <form method="POST" action="/user-delete/{{ $row->user_id }}">
                          @csrf
                          <input name="_method" type="hidden" value="DELETE">
                          <button type="submit" class="btn btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                      </form>
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
  </section>
@endsection
@section('scripts')
<script>
       $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("username");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
 </script>
@endsection
