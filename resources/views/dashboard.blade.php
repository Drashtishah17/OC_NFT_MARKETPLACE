@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="content-header"  style="background-color: lavender">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6" >
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('body')
<section class="content" style="background-color: lavender">
    <div class="container-fluid" style="background-color: lavender">
      <!-- Small boxes (Stat box) -->
      <div class="row"  style="background-color: lavender">
        <div class="col-lg-3 col-6"  style="background-color: lavender">
          <!-- small box -->
          <div class="small-box" style="background-color: #AFEEEE">
            <div class="inner">
              <h3>10</h3>
              <p>Total Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('userslist')}}" class="small-box-footer" style="background-color: #0C090A">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box" style="background-color: #FCDFFF">
            <div class="inner">
              <h3>4</h3>

              <p>Total NFTs</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('nftslist')}}" class="small-box-footer" style="background-color: #0C090A">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box" style="background-color: #8EEBEC">
            <div class="inner">
              <h3>10</h3>

              <p>Total Transactions</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ route('transactiondetails') }}" class="small-box-footer" style="background-color: #0C090A">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
  </section>
@endsection