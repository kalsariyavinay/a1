@extends('layouts.app')
@section('content')

<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row gutter-50">
                <div class="col-lg-7 portfolio-single-image" data-lightbox="gallery">
                    <div class="row col-mb-30">
                        <h2>Contact-Us</h2>
                        <p>This form is a channel for applicants to provide information about the services they are offering. The applicant must complete the form
                            with the information requested
                        </p>
                        <a href="" class="col-lg-12 col-md-6" data-lightbox="gallery-item"><img src="{{asset('frontend/images/blocks/preview/portfolio-single/1.jpg')}}" alt="Image 1"></a>
                    </div>
                </div><!-- .portfolio-single-image end -->
                <div class="col-lg-5 portfolio-single-content">

                    <form action="{{ route('contactus.store') }}" method="post" role="button" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="hidden_labels" for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="hidden_labels" for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="hidden_labels" for="phone_number">Phone Number</label>
                            <input type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="fieldSelectorId" value="{{ old('phone_number') }}" placeholder="phone number">
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="hidden_labels" for="msg_subject">Subject</label>
                            <input type="text" class="form-control @error('msg_subject') is-invalid @enderror" name="msg_subject" value="{{ old('msg_subject') }}" placeholder="subject">
                            @error('msg_subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="hidden_labels" for="message">message</label>
                            <textarea type="text" class="form-control @error('message') is-invalid @enderror" rows="4" name="message" value="{{ old('message') }}" placeholder="message"></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn text-white " style="background-color: var(--cnvs-themecolor)" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

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
