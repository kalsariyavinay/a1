@extends('admin.layout.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Update Menu</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center">Update Menu Form</h4>
                    <form action="{{ route('menus.update', $menu->id) }}" method="post" role="button" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">

                                    <label for="name">Name</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $menu->name}}" placeholder="Name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label for="link">Link</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{$menu->link}}" placeholder="link">
                                        @error('link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button class="btn text-white " style="background-color: #696cff" type="submit">update</button>
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
