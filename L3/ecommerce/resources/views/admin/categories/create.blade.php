@extends('admin.layouts.master')

@section('content')
<div class="row"> 
  <div class="col-12 ">
      <div class=" mt-3 d-flex align-item-center justify-content-between">
         <h3>Create Category</h3>
         <a href="{{route('categories.index')}}" class="btn btn-info text-white">Category List</a>
      </div>
      <hr>
  </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                    <form action="{{ route('categories.store')}}" method="post" >
                    @csrf
                    <div class="card-body">
                       @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                       @endif
                       @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                       @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
             </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection