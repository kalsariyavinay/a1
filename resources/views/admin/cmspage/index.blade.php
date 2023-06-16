@extends('admin.layout.app')
@section('content')
<section class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Cms Page
                        <input id="myInput" type="text" placeholder="Search data" class="form-control w-25 mb-3" style="float: right">
                        <a class="btn text-white" style="background-color: #696cff" href="{{ route('cmspage.create') }}">+</a></h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Url</th>
                                    <th>Description</th>
                                    <th>Created_at</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable" class="table-border-bottom-0">
                                @foreach ($cmspages as $cmspage)
                                <tr>
                                    <td>{{$cmspage->id}}</td>
                                    <td>{{$cmspage->title}}</td>
                                    <td>{{$cmspage->url}}</td>
                                    <td><?php echo $cmspage->description ?></td>
                                    <td>{{get_formatted_date($cmspage->created_at, 'd-m-Y') }}</td>
                                    <td>
                                        @if($cmspage->is_active == 1)
                                        <a href="{{route('cmspage.status_update',[$cmspage->id,0])}}" class="btn btn-success">Active</a>
                                        @else
                                        <a href="{{route('cmspage.status_update',[$cmspage->id,1])}}" class="btn btn-danger">inActive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('cmspage.edit', $cmspage->id) }}" class="btn btn-info">
                                            <i class="fa-regular fa-pen-to-square"></i></a>

                                        <a href="{{ route('cmspage.delete', $cmspage->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-5">{{ $cmspages->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
