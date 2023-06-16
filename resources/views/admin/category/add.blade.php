@extends('admin.layout.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Create New Category</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class=" d-flex justify-content-center" >Category Create Form</h4>
                    <form action="{{ route('category.store') }}" method="post" role="button" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                  
                                    <label>Category Name</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{ old('CategoryName') }}" placeholder="CategoryName">
                                        @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    
                                    <div class="d-flex justify-content-center">
                                        <button class="btn text-white " style="background-color: #696cff" type="submit">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
