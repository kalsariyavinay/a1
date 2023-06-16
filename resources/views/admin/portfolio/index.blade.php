@extends('admin.layout.app')
@section('content')
<section class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Portfolio
                        <input id="myInput" type="text" placeholder="Search data" class="form-control w-25 mb-3" style="float: right">
                        <a class="btn text-white" style="background-color: #696cff" href="{{ route('portfolio.create') }}">+</a></h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>photos</th>
                                    <th>category</th>
                                    <th>map_url</th>
                                    <th>Created_at</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable" class="table-border-bottom-0">
                                @foreach ($portfolios as $portfolio)
                                <tr>
                                    <td>{{$portfolio->id}}</td>
                                    <td>{{$portfolio->title}}</td>
                                    <td><?php echo $portfolio->description ?></td>
                                    <td> 
                                        @foreach($portfolio->portfolio_medias as $image)
                                        <img src="{{ asset($image->url ?? "") }}" alt="Product Image" width="60px" height="60px"><br>
                                        @endforeach
                                    </td>

                                    <td>{{$portfolio->categoryss->category_name ?? ""}}</td>
                                    <td>{{$portfolio->map_url}}</td>
                                    <td>{{get_formatted_date($portfolio->created_at, 'd-m-Y') }}</td>
                                    <td>
                                        @if($portfolio->is_active == 1)
                                        <a href="{{route('portfolio.status_update',[$portfolio->id,0])}}" class="btn btn-success">Active</a>
                                        @else
                                        <a href="{{route('portfolio.status_update',[$portfolio->id,1])}}" class="btn btn-danger">inActive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-info">
                                            <i class="fa-regular fa-pen-to-square"></i></a>

                                        <a href="{{ route('portfolio.delete', $portfolio->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-5">{{ $portfolios->links() }}</div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection
