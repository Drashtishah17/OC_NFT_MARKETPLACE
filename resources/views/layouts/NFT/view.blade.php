@extends('layouts.app')
@section('title', 'View NFTs')

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
                    <li class="breadcrumb-item active">View NFTs</li>
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
                            <h3 class="card-title">NFT Details </h3>
                            <a href="{{route('nftslist')}}" class="btn btn-primary btn-sm float-right">Back</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="col-12">
                                        <img src="{{asset('dist/img/'.$nfts->nft_image_path)}}" class="product-image" alt="Product Image"  style= "height: 400px; width: 600px;">>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="col-md-4 mt-3">
                                        <label>User Name</label>
                                        <div class="p-2 border">{{$nfts->usernames}}</div>
                                      {{-- <div>  <a href="/view-user/{{ $nfts->usernames }}" class="p-2 border">{{$nfts->usernames}}</a></div> --}}
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label>NFT Name</label>
                                        <div class="p-2 border">{{$nfts->nft_name}}</div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label>NFT Description</label>
                                        <div class="p-2 border">{{$nfts->nft_description}}</div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label>NFT Price</label>
                                        <div class="p-2 border">{{$nfts->nft_price}}</div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label>Category</label>
                                        <div class="p-2 border">{{$nfts->category}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection