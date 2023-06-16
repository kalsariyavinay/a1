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

</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Update Portfolio</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="d-flex justify-content-center">Update Portfolio Form</h4>
                    <form action="{{ route('portfolio.update', $portfolio->id) }}" method="post" role="button" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">

                                    <label>Title</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$portfolio->title}}" placeholder="title">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label>Description</label>
                                    <div class="form-group mb-2">
                                        <textarea type="text" id="editor" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description"><?php echo $portfolio->description ?></textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label>Photos</label>
                                    <div class="form-group mb-2">
                                        <input type="file" class="form-control @error('url') is-invalid @enderror" id="gallery-photo-add" name="url[]" value="{{$portfolio->url}}" placeholder="photos" multiple>
                                        <div class="gallery"></div>
                                        @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><hr>
                                    <div id="employee-tables">
                                        @foreach($portfolio->portfolio_medias as $image)
                                        <section>
                                            <img src="{{ asset($image->url ?? "") }}" style="height:50px; width:50px" alt="Product Image">
                                            <a href="{{ route('portfolio_media.delete', $image->id) }}"><i class="fa-solid fa-trash"></i></a>
                                        </section>
                                        @endforeach
                                    </div><br>

                                    <label>Category</label>
                                    <div class="form-group mb-2">
                                        <select class="form-control select2" name="category" style="width: 100%;" required>
                                            @foreach($category as $cat)
                                            <option value="{{$cat->id}}" <?php if ($portfolio->categoryss->id == $cat->id ) { 
                                                echo "selected = selected";
                                            } ?>>{{$cat->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <label>Map URL</label>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control @error('map_url') is-invalid @enderror" name="map_url" value="{{$portfolio->map_url}}" placeholder="map_url">
                                        @error('map_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><br>

                                    <div class="form-group mb-2">
                                        <a id="add" class="justify-content-left btn btn-info text-white">Add New
                                            Row</a><br>
                                        <div id="dynamc" class="form-group mb-2"><br>

                                            <table id="employee-table">
                                                <tr>
                                                    <th>Text</th>
                                                    <th>Value</th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php
                                                        $result = $portfolio->custom_data;
                                                        $final = json_decode($result,true);
                                                        for ($i=0; $i < count($final['text']); $i++) { 
                                                    ?>
                                                <tr>
                                                    <td>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control @error('text') is-invalid @enderror" name="text[]" value="{{$final['text'][$i]}}" placeholder="Text" />
                                                            @error('text')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    <td>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control @error('value') is-invalid @enderror" name="value[]" value="{{$final['value'][$i]}}" placeholder="Value" />
                                                            @error('value')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td><input type="button" value="Delete" class="btn btn-danger" onclick="deleteRow(this)"></td>
                                                </tr>
                                                <?php } ?>
                                            </table>
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
        var rowCount = table.length;
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
                        $($.parseHTML('<img style="margin-right: 8px; margin-bottom: 8px;" width="70" height="70" object-position="center">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
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
