@extends('admin.layout.app')
@section('content')
<section class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">blog
                        <input id="myInput" type="text" placeholder="Search data" class="form-control w-25 mb-3" style="float: right">
                        <a class="btn text-white" style="background-color: #696cff" href="{{ route('blogs.create') }}">+</a></h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title English</th>
                                    <th>Title Spanish</th>
                                    <th>image</th>
                                    <th>video</th>
                                    <th>description English</th>
                                    <th>description Spanish</th>
                                    <th>Hyperlink English</th>
                                    <th>Hyperlink Spanish</th>
                                    <th>Meta Data English</th>
                                    <th>Meta Data Spanish</th>
                                    <th>tags English</th>
                                    <th>tags Spanish</th>
                                    <th>Active</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable" class="table-border-bottom-0">
                                @foreach ($blog as $bg)
                                <tr>
                                    <td>{{$bg->id}}</td>
                                    <td>{{$bg->title}}</td>
                                    <td>{{$bg->title_spanish}}</td>
                                    <td>
                                        @foreach($bg->blog_medias as $image)
                                        @if($image->media_type == 1)
                                        <img src="{{ asset($image->url ?? "") }}" width="50" height="50" alt="Product Image"><br><br>
                                        @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        @foreach($bg->blog_medias as $image)
                                        @if ($image->media_type == 2)
                                        <video width="50" height="50" controls loop autoplay>
                                            <source src="{{ asset($image->url ?? "") }}">
                                        </video><br>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td><?php echo $bg->description ?></td>
                                    <td><?php echo $bg->description_spanish ?></td>
                                    <td>{{$bg->hyperlink}}</td>
                                    <td>{{$bg->hyperlink_spanish}}</td>
                                    <td>{{$bg->meta_data }}</td>
                                    <td>{{$bg->meta_data_spanish }}</td>
                                    <td>{{$bg->tags}}</td>
                                    <td>{{$bg->tags_spanish}}</td>
                                    <td>
                                        @if($bg->is_active == 1)
                                        <a href="{{route('blogs.status_update',[$bg->id,0])}}" class="btn btn-success">Active</a>
                                        @else
                                        <a href="{{route('blogs.status_update',[$bg->id,1])}}" class="btn btn-danger">inActive</a>
                                        @endif
                                    </td>
                                    <td>{{get_formatted_date($bg->created_at, 'd-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('blogs.edit', $bg->id) }}" class="btn btn-info">
                                            <i class="fa-regular fa-pen-to-square"></i></a>

                                        <a href="{{ route('blogs.delete', $bg->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-5">{{ $blog->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
