@extends('admin.layouts.master')

@section('content')
<div class="row"> 
  <div class="col-12 ">
      <div class=" mt-3 d-flex align-item-center justify-content-between">
         <h3>Categories</h3>
         <a href="{{route('categories.create')}}" class="btn btn-info text-white">Add New</a>
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
             @foreach($categories as $info)
             <tr>
                <td>{{$info->id}}</td>
                <td>{{$info->name}}</td>
                <td>{{$info->slug}}</td>
                <td>{{$info->created_at}}</td>
                <td>
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('categories.edit', $info->id) }}">Edit</a>
                <form action="{{ route('categories.delete', $info->id) }}" method="POST" style="display:inline">
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