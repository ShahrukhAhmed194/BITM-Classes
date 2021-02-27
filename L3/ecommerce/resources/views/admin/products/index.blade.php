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
              <th>Name</th>
              <th>Slug</th>
              <th>Date</th>
              <th>Action</th> 
            </tr>
          </thead>
          <tbody>
            
             <tr>
                <td>M</td>
                <td>S</td>
                <td>R</td>
                <td>A</td>
                <td>
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('products.edit',1) }}">Edit</a>
                <form action="{{ route('products.delete', 1) }}" method="POST" style="display:inline">
                @method('DELETE')
                @csrf 
                <input type="submit" class="btn btn-sm btn-outline-danger" value="Delete">
                </form>
                </td>
            </tr>
            
              
              
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection