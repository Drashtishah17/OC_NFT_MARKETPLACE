@extends('layouts.app')
@section('title', 'NFTs List')

@section('content')
<div class="content-header"  style="background-color: lavender">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">NFTs</h1>
            </div><!-- /.col -->
            <div class="col-sm-6" >
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">NFTs List</li>
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
            <h3 class="card-title">NFTs List</h3>
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
                  <th>NFt Id</th>
                  <th>NFT Name</th>
                  <th>NFT Description</th>
                  <th>NFT Price</th>
                  {{-- <th>Category</th> --}}
                  <th>NFT Image</th>
                  <th>View</th>
                  <th>Delete</th>

                </tr>
                </thead>
                <tbody>
                    @foreach ($nfts as $value )
                    <tr>
                        <td>{{ $value->nft_id }}</td>
                        <td>{{ $value->nft_name }}</td>
                        <td>{{ $value->nft_description }}</td>
                        <td>{{ $value->nft_price }}</td>
                        {{-- <td>{{ $value->category }}</td> --}}
                        <td>
                          <img alt="nft1" class="table-avatar" src="{{asset('dist/img/'.$value->nft_image_path)}}" style= "height: 40px; width: 40px;">

                          {{-- <img src="{{asset('admin-assets/dist/img/'.$value->nft_image_path)}}" alt="" class= "cate-image" style= "height: 20px; width: 30px;"> --}}
                        </td>
                        <td>
                            <a href="/view-nft/{{ $value->nft_id }}" class="btn btn-success">View</a>
                        </td>
                        <td>
                            {{-- <form action="/nft-delete/{{ $value->nft_id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                              </form> --}}
                              <form method="POST" action="/nft-delete/{{ $value->nft_id }}">
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
          var name = $(this).data("nft_name");
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