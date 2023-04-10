@extends('layouts.app')
@section('title', 'Transaction details')

@section('content')
<div class="content-header"  style="background-color: lavender">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Users Transaction Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6" >
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Transaction Details List</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('body')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All Transactions Details</h3>
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
                <th>Transaction Id</th>
                <th>Sender</th>
                <th>Receiver</th>
                {{-- <th>NFT Id</th> --}}
                <th>Amount</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
                  @foreach ($transaction as $value )
                  <tr>
                      <td>{{ $value->transaction_id }}</td>
                      <td>{{ $value->sender }}</td>
                      <td>{{ $value->receiver }}</td>
                      {{-- <td>{{ $value->nfts_id }}</td> --}}
                      <td>{{ $value->amount }}</td>
                      <td>
                        {{-- <form action="/user-delete/{{ $value->transaction_id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</a>
                          </form> --}}
                          <form method="POST" action="/user-delete/{{ $value->transaction_id }}">
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