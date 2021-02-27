@extends('admin.layouts.master')

@section('content')
<div class="row"> 
  <div class="col-12 ">
      <div class=" mt-3 d-flex align-item-center justify-content-between">
         <h3>products</h3>
         <a href="{{route('products.create')}}" class="btn btn-info text-white">Add New</a>
      </div>
      <hr>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>short_description</th>
              <th>Date</th>
              <th>Action</th> 
            </tr>
          </thead>
          <tbody>
            
            @foreach($products as $product)
             <tr>
                <td>{{ $product->id }}</td>
                <td><img width="40"src="{{ asset("storage/$product->image") }}" alt="image"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->slug }}</td>
                <td>{{ $product->price }}</td>
                <td class="text-center">{{ $product->quantity }}</td>
                <td>{{ $product->short_description }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                <form action="{{ route('products.delete', $product->id) }}" method="POST" style="display:inline">
                @method('DELETE')
                @csrf 
                <input type="submit" class="btn btn-sm btn-outline-danger" value="Delete">
                </form>
                </td>
            </tr>
            @endforeach
              
              
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection