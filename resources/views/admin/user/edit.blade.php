@extends('admin.layout.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Update User</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center">Update User Form</h4>
                    <form action="{{ route('users.update', $user->id) }}" method="post" role="button" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="username">Username</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$user->username}}" placeholder="username">
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label for="name">Name</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name}}" placeholder="Name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label for="email">Email</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control " value="{{ $user->email}}" disabled>
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
