@extends('admin.layout.app')
@section('content')

<style>
    .gallery {
        margin-left: 15px;
    }

    p {
        height: 150px;
    }

</style>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Update Blog</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center">Update Blog Form</h4>
                    <form action="{{route('blogs.update',$blog->id)}}" method="post" role="button" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" name="blog_id">
                                    <label>Title</label>
                                    <div class="col-xl-12" style="box-shadow: none">
                                        <div class="nav-align-top">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                                                        English
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                                                        Spanish
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" style="box-shadow: none">
                                                <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                                                    <div class="form-group ">
                                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $blog->title }}" placeholder="title">
                                                        @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                                                    <div class="form-group ">
                                                        <input type="text" class="form-control @error('title_spanish') is-invalid @enderror" name="title_spanish" value="{{ $blog->title_spanish }}" placeholder="Título">
                                                        @error('title_spanish')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="blog_id">
                                    <label>Description</label>
                                    <div class="col-xl-12" style="box-shadow: none">
                                        <div class="nav-align-top">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-desc-en" aria-controls="navs-top-home" aria-selected="true">
                                                        English
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-desc-es" aria-controls="navs-top-profile" aria-selected="false">
                                                        Spanish
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" style="box-shadow: none">
                                                <div class="tab-pane fade show active" id="navs-top-desc-en" role="tabpanel">
                                                    <div class="form-group mb-2">
                                                        <textarea class="form-control @error('description') is-invalid @enderror" id="editor-desc-en" cols="82" rows="4" name="description" placeholder="description"><?php echo $blog->description; ?></textarea>
                                                        @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="navs-top-desc-es" role="tabpanel">
                                                    <div class="form-group mb-2">
                                                        <textarea class="form-control @error('description_spanish') is-invalid @enderror" id="editor-desc-es" cols="82" rows="4" name="description_spanish" placeholder="descripción"><?php echo $blog->description_spanish; ?></textarea>
                                                        @error('description_spanish')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="url">Image</label>
                                    <div class="form-group mb-2">
                                        <input type="file" class="form-control @error('image_url') is-invalid @enderror" id="gallery-photo-add" value="{{$blog->image_url}}" name="image_url[]" placeholder="url" multiple />
                                        <div class="gallery"></div>
                                        @error('image_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    @foreach($blog->blog_medias as $image)
                                    @if($image->media_type == 1)
                                    <img src="{{ asset($image->url ?? "") }}" width="50" height="50" alt="Product Image">
                                    <a href="{{ route('blog_media.delete', $image->id) }}"><i class="fa-solid fa-trash"></i></a>
                                    @endif
                                    @endforeach <br><br>

                                    <label for="url">videos</label>
                                    <div class="form-group mb-2">
                                        <input type="file" class="form-control @error('video_url') is-invalid @enderror" id="gallery-video-add" value="{{$blog->video_url}}" name="video_url[]" placeholder="url" multiple />
                                        <div class="gallery-video"></div>
                                        @error('video_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    @foreach($blog->blog_medias as $image)
                                    @if ($image->media_type == 2)
                                    <video width="50" height="50" controls loop autoplay>
                                        <source src="{{ asset($image->url ?? "") }}">
                                    </video>
                                    <a href="{{ route('blog_media.delete', $image->id) }}"><i class="fa-solid fa-trash"></i></a>
                                    @endif
                                    @endforeach <br><br>

                                    <label>Tags</label>
                                    <div class="col-xl-12" style="box-shadow: none">
                                        <div class="nav-align-top">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-tags-en" aria-controls="navs-top-home" aria-selected="true">
                                                        English
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-tags-es" aria-controls="navs-top-profile" aria-selected="false">
                                                        Spanish
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" style="box-shadow: none">
                                                <div class="tab-pane fade show active" id="navs-top-tags-en" role="tabpanel">
                                                    <div class="form-group mb-2">
                                                        <input type="text" class="form-control @error('tags') is-invalid @enderror" name="tags" value="{{$blog->tags}}" placeholder="tags">
                                                        @error('tags')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="navs-top-tags-es" role="tabpanel">
                                                    <div class="form-group mb-2">
                                                        <input type="text" class="form-control @error('tags_spanish') is-invalid @enderror" name="tags_spanish" value="{{$blog->tags_spanish}}" placeholder="etiquetas">
                                                        @error('tags_spanish')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label>Hyperlink</label>
                                    <div class="col-xl-12" style="box-shadow: none">
                                        <div class="nav-align-top">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-hyp-en" aria-controls="navs-top-home" aria-selected="true">
                                                        English
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-hyp-es" aria-controls="navs-top-profile" aria-selected="false">
                                                        Spanish
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" style="box-shadow: none">
                                                <div class="tab-pane fade show active" id="navs-top-hyp-en" role="tabpanel">
                                                    <div class="form-group mb-2">
                                                        <input type="text" class="form-control @error('hyperlink') is-invalid @enderror" name="hyperlink" value="{{ $blog->hyperlink }}" placeholder="hyperlink">
                                                        @error('hyperlink')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="navs-top-hyp-es" role="tabpanel">
                                                    <div class="form-group mb-2">
                                                        <input type="text" class="form-control @error('hyperlink_spanish') is-invalid @enderror" name="hyperlink_spanish" value="{{ $blog->hyperlink_spanish }}" placeholder="Hipervínculo">
                                                        @error('hyperlink_spanish')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label>Meta Data</label>
                                    <div class="col-xl-12" style="box-shadow: none">
                                        <div class="nav-align-top">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-meta-en" aria-controls="navs-top-home" aria-selected="true">
                                                        English
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-meta-es" aria-controls="navs-top-profile" aria-selected="false">
                                                        Spanish
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" style="box-shadow: none">
                                                <div class="tab-pane fade show active" id="navs-top-meta-en" role="tabpanel">
                                                    <div class="form-group mb-2">
                                                        <input type="text" class="form-control @error('meta_data') is-invalid @enderror" name="meta_data" value="{{ $blog->meta_data }}" placeholder="meta_data">
                                                        @error('meta_data')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="navs-top-meta-es" role="tabpanel">
                                                    <div class="form-group mb-2">
                                                        <input type="text" class="form-control @error('meta_data_spanish') is-invalid @enderror" name="meta_data_spanish" value="{{ $blog->meta_data_spanish }}" placeholder="meta_datos">
                                                        @error('meta_data_spanish')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

<script>
    ClassicEditor
        .create(document.querySelector('#editor-desc-en'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#editor-desc-es'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    $(function() {
        var imagesPreview = function(input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img style="margin-right: 8px; margin-bottom: 8px; " class="ml-2" width="50" height="50" object-position="center">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#gallery-photo-add').on('change', function() {
            imagesPreview(this, 'div.gallery');
        });
    });

    $(function() {
        var imagesPreview = function(input, placeToInsertImagePreview) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<video width="50" height="50" controls loop autoplay> </video>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#gallery-video-add').on('change', function() {
            imagesPreview(this, 'div.gallery-video');
        });
    });

</script>


@endsection
