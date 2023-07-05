@extends('layouts.admin')

@section('content')

{{-- <div class="content-wrapper">
  <div class="container"> --}}
    <div class="row">
        <div class="col-md-12 grid-margin">

          @if (session('message'))
              <h6 class="alert alert-success">{{ (session('message')) }}</h6>
          @endif

            <div class="me-md-3 me-xl-5">
                <h2>Dashboard</h2>
                <p class="mb-md-0">Pharmacare Pharmacy Analytics</p>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="alert alert-success text-center">
                      <div><i class="fas fa-shopping-bag fa-3x"></i></div><br/>
                      <h1>{{ $totalOrder }}</h1>
                      <h3>Total Orders</h3>
                      <a href="{{ url('admin/orders') }}">view</a>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="alert alert-info text-center">
                    <div><i class="fa fa-shopping-basket fa-3x"></i></div><br/>
                    <h1>{{ $todayOrder }}</h1>
                    <h3>Today Order</h3>
                    <a href="{{ url('admin/orders') }}">view</a>
                  </div>
                </div>
              <div class="col-md-3">
                <div class="alert alert-warning text-center">
                  <div><i class="fa fa-calendar fa-3x"></i></div><br/>
                  <h1>{{ $thisMonthOrder }}</h1>
                  <h3>This Month Orders</h3>
                    <a href="{{ url('admin/orders') }}">view</a>
                </div>
              </div>
            {{-- <div class="col-md-3">
              <div class="alert alert-warning text-center">
                  <label>Year Orders</label>
                  <h1>{{ $thisYearOrder }}</h1>
                  <a href="{{ url('admin/orders') }}">view</a>
              </div>
          </div> --}}
            </div>

            <hr>
            <div class="row">
              <div class="col-md-3">
                <div class="alert alert-success text-center">
                  <div><i class="fa fa-gift fa-3x"></i></div><br/>
                  <h1>{{ $totalProducts }}</h1>
                  <h3>Total Products</h3>
                    <a href="{{ url('admin/products') }}">view</a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="alert alert-success text-center">
                  <div><i class="fa fa-sitemap fa-3x"></i></div><br/>
                  <h1>{{ $totalCategories }}</h1>
                  <h3>Total Categories</h3>
                    <a href="{{ url('admin/category') }}">view</a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="alert alert-success text-center">
                  <div><i class="fa fa-tags fa-3x"></i></div><br/>
                  <h1>{{ $totalBrands }}</h1>
                  <h3>Total Brands</h3>
                    <a href="{{ url('admin/brands') }}">view</a>
                </div>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-md-3">
                <div class="alert alert-info text-center">
                  <div><i class="fa fa-users fa-3x"></i></div><br/>
                  <h1>{{ $totalAllUsers }}</h1>
                  <h3>All Users</h3>
                    <a href="{{ url('admin/users') }}">view</a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="alert alert-success text-center">
                  <div><i class="fa fa-user fa-3x"></i></div><br/>
                  <h1>{{ $totalUser }}</h1>
                  <h3>Total Users</h3>
                    <a href="{{ url('admin/users') }}">view</a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="alert alert-primary text-center">
                  <div><i class="fa fa-user-secret fa-3x"></i></div><br>
                  <h1>{{ $totalAdmin }}</h1>
                  <h3>Total Admin</h3>
                    <a href="{{ url('admin/users') }}">view</a>
                </div>
              </div>
            </div>

        </div>
    </div>
  {{-- </div>
</div> --}}

@endsection

