@extends('admin.layout.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Update Contact-Us</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center">Update contactuss Form</h4>
                    <form action="{{ route('privacypolicy.update', $privacypolicy->id) }}" method="post" role="button" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label class="hidden_labels" for="message">message</label>
                            <textarea type="text" class="form-control @error('message') is-invalid @enderror" rows="7" name="message" placeholder="message">{{ $privacypolicy->message}}</textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><br>

                        <div class="d-flex justify-content-center">
                            <button class="btn text-white " style="background-color: #696cff" type="submit">update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection