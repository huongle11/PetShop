@extends('admin.layout')

@section('content')

 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="/dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <li class="nav-item">
    <a class="nav-link " href="#">
      <i class="ri-shopping-basket-2-line"></i>
      <span>Product</span>
    </a>
  </li><!-- End Dashboard Nav -->
</ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

<div class="pagetitle">
  <h1>Product</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
      <li class="breadcrumb-item active">Product</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <!-- Recent Sales -->
  <div class="col-12">
    <div class="card recent-sales overflow-auto">

      <div class="filter">
        <!-- <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a> -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>

      <div class="card-body">
        <div class="inst">
          <h5 class="card-title">Stock</h5>
          <div class="btn_n">
            <!-- style="background-color: whitesmoke; border: 1px solid #1b1b1cd0;" -->
            <button class="button bt1" id="myButtonAdd">
              <i class="bi bi-plus-circle" style=" color:hsl(36, 94%, 57%);"></i>
            </button>
          </div>
        </div>

        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <th scope="row"><a href="#" style=" color:hsl(36, 94%, 57%);">{{$product->id}}</a></th>
              <td>{{$product->name}}</td>
              <td>${{$product->price?->base_price}}</td>
              <td>{{$product->stock?->quantity}}</td>
              <td> <a href="/edit?id={{$product->id}}"><i class="bi bi-pencil-square"
                    style=" color:hsl(36, 94%, 57%);"></i></a></td>
              <td>
                <a href="/product/{{$product->id}}"
                  onclick="event.preventDefault();document.getElementById('delete-form-{{$product->id}}').submit();"
                  style=" color:hsl(36, 94%, 57%);"><i class="bi bi-trash"></i></a>
                <form id="delete-form-{{$product->id}}"
                  action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST"
                  style="display: none;">
                  @csrf
                  @method('DELETE')
                </form>
              </td>

            </tr>

            @endforeach
          </tbody>
        </table>

      </div>

    </div>
  </div><!-- End Recent Sales -->

  <hr>

</main><!-- End #main -->
@stop