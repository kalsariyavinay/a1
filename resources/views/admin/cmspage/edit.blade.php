@extends('admin.layout.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Update Cms Page</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center">Update Cms Page Form</h4>
                    <form action="{{ route('cmspage.update', $cmspage->id) }}" method="post" role="button" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">

                                    <label>Title</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$cmspage->title}}" placeholder="Title">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label>Url</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{$cmspage->url}}" placeholder="Url">
                                        @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label>Description</label>
                                    <div class="form-group mb-2">
                                        <textarea type="text" id="editor" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description"><?php echo $cmspage->description ?></textarea>
                                        @error('description')
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
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>
@endsection
