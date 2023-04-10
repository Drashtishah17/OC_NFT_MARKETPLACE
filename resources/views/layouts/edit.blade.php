@extends('layouts.app')
@section('title', 'Admin Profile Edit')

@section('content')
<div class="content-header"  style="background-color: lavender">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Admin Profile Edit</h1>
            </div><!-- /.col -->
            <div class="col-sm-6" >
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Admin Profile Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection


@section('body')
<section class="content">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                    <div class="card-header">
                        <h3>Edit Role for Admin</h3>
                    </div>
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="/role-update/{{ $users->user_id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT')}}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="username"  value="{{ $users->username }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email"  value="{{ $users->email }}" class="form-control">
                            </div>
                            {{-- <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password"  value="{{ $users->password }}" class="form-control">
                          </div> --}}
                            {{-- <div class="form-group">
                                <label>Give Role</label>
                                <select name="role" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                             </div> --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="{{ route('adminsprofile') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
              </div>
          </div>

      </div>
  </div>
</section>
@endsection
