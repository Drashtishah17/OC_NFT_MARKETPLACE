@extends('layouts.app')
@section('title', 'View Users')

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
                    <li class="breadcrumb-item active">View Users</li>
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
                        <h3 class="card-title">User Details </h3>
                        <a href="{{ route('userslist') }}" class="btn btn-primary btn-sm float-right">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <label>Username</label>
                                <div class="p-2 border">{{$users->username}}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label>Email</label>
                                <div class="p-2 border">{{$users->email}}</div>
                            </div>
                            {{-- <div class="col-md-4 mt-3">
                                <label>Password</label>
                                <div class="p-2 border">{{$users->password}}</div>
                            </div> --}}
                            <div class="col-md-4 mt-3">
                                <label>Role</label>
                                <div class="p-2 border">{{$users->role == '1' ? 'Admin':'User'}}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label>Verification Status</label>
                                <div class="p-2 border">{{$users->is_verified == '0' ? 'Pending':'Done'}}</div>
                            </div>
                            {{-- <div class="col-md-4 mt-3">
                                <label>Is_Deleted</label>
                                <div class="p-2 border">{{$users->is_deleted == '0' ? 'False':'True'}}</div>
                            </div> --}}
                            {{-- <div class="col-md-4 mt-3">
                                <label>Salt</label>
                                <div class="p-2 border">{{$users->salt}}</div>
                            </div> --}}
                            <div class="col-md-4 mt-3">
                                <label>Meta-Mask Address</label>
                                <div class="p-2 border">{{$users->metamask_address}}</div>
                            </div>
                            {{-- <div class="col-md-4 mt-3">
                                <label>Created_at</label>
                                <div class="p-2 border">{{$users->created_at}}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label>Updated_at</label>
                                <div class="p-2 border">{{$users->updated_at}}</div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection