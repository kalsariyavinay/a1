@extends('admin.layout.app')
@section('content')
<style>
    #dynamc {
        margin: 0 auto;
        width: 600px;
        text-align: center
    }

    #employee-table {
        width: 500px;
        border: 1px solid #aaa
    }

    .gallery{
        margin-left: 15px;
    }
    p {
        height: 150px;
    }

</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Create New Portfolio</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class=" d-flex justify-content-center">Portfolio Create Form</h4>
                    <form action="{{ route('portfolio.store') }}" method="post" role="button" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">

                                    <label>Title</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="title">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label>Description</label>
                                    <div class="form-group mb-2">
                                        <textarea type="text" id="editor" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="Description"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label for="url">Image</label>
                                    <div class="form-group mb-2">
                                        <input type="file" class="form-control @error('url') is-invalid @enderror" id="gallery-photo-add" value="{{old('url')}}" name="url[]" placeholder="url" multiple />
                                        <div class="gallery" ></div>
                                        @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label>Category</label>
                                    <div class="form-group mb-2">
                                        <select class="form-control @error('category') is-invalid @enderror select2" name="category" style="width: 100%;" required>
                                            @foreach($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label>Map URL</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('map_url') is-invalid @enderror" name="map_url" value="{{ old('map_url') }}" placeholder="MapUrl">
                                        @error('map_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label>Custom Data</label>
                                    <div class="form-group mb-2">
                                        <a id="add" class="justify-content-left btn btn-info text-white">Add New Row</a><br><br>
                                        <div> (Min 1 Data store)</div>
                                        <div id="dynamc" class="form-group mb-2">
                                            <table id="employee-table">
                                                <tr>
                                                    <th>Text</th>
                                                    <th>Value</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control @error('text') is-invalid @enderror" name="text[]" placeholder="Text" />
                                                            @error('text')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    <td>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control @error('value') is-invalid @enderror" name="value[]" placeholder="Value" />
                                                            @error('value')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td><input type="button" value="Delete" class="btn btn-danger" onclick="deleteRow(this)" /></td>
                                                </tr>
                                            </table>
                                        </div>
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
<script type="text/javascript">
    $("#add").on("click", function() {
        addNewRow();
    });
    $("#delete-btn").on("click", function() {
        deleteRow();
    });

    function addNewRow() {
        var rowHtml = '<tr><td><input type="text" class="form-control" name="text[]" placeholder="Text"/></td>' +
            '<td><input type="text" class="form-control" name="value[]" placeholder="Value"/></td>' +
            '<td><input type="button" value="Delete" class="btn btn-danger" onclick="deleteRow(this)" /></td></tr>';
        $("#employee-table").append(rowHtml);
    }

    function deleteRow(ele) {
        var table = $('#employee-table')[0];
        var rowCount = table.rows.length;
        if (rowCount <= 1) {
            alert("There is no row available to delete!");
            return;
        }
        if (ele) {
            $(ele).parent().parent().remove();
        } else {
            table.deleteRow(rowCount - 1);
        }
    }

</script>
<script>
   $(function() {
    var imagesPreview = function(input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img   style="margin-right: 8px; margin-bottom: 8px; " class="ml-2" width="50" height="50" object-position="center">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});

</script>

@endsection
