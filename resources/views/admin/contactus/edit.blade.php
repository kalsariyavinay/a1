@extends('admin.layout.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Update Contact-Us</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center">Update contactuss Form</h4>
                    <form action="{{ route('contactus.update', $contactus->id) }}" method="post" role="button" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label class="hidden_labels" for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$contactus->name}}" placeholder="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="hidden_labels" for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$contactus->email}}" placeholder="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="hidden_labels" for="phone_number">Phone Number</label>
                            <input type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="fieldSelectorId" value="{{$contactus->phone_number}}" placeholder="phone number">
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="hidden_labels" for="msg_subject">Subject</label>
                            <input type="text" class="form-control @error('msg_subject') is-invalid @enderror" name="msg_subject" value="{{$contactus->msg_subject}}" placeholder="subject">
                            @error('msg_subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="hidden_labels" for="message">message</label>
                            <input type="text" class="form-control @error('message') is-invalid @enderror" rows="4" name="message" value="{{$contactus->message}}" placeholder="message">
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn text-white " style="background-color: #696cff" type="submit">update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function() {
        jQuery("#fieldSelectorId").keypress(function(e) {
            var length = jQuery(this).val().length;
            if (length > 9) {
                return false;
            } else if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            } else if ((length == 0) && (e.which == 48)) {
                return false;
            }
        });
    });

</script>

@endsection
