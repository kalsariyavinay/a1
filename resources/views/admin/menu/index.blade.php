@extends('admin.layout.app')
@section('content')
<section class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Menu
                        <input id="myInput" type="text" placeholder="Search data" class="form-control w-25 mb-3" style="float: right">
                        <a class="btn text-white" style="background-color: #696cff" href="{{ route('menus.create') }}">+</a></h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Created_at</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable" class="table-border-bottom-0">
                                @php
                                     $menus = App\Models\Menu::paginate(5);
                                @endphp
                                @foreach ($menus as $menu)
                                <tr>
                                    <td>{{$menu->id}}</td>
                                    <td>{{$menu->name}}</td>
                                    <td>{{$menu->link}}</td>
                                    <td>{{get_formatted_date($menu->created_at, 'd-m-Y') }}</td>
                                    <td>
                                        @if($menu->is_active == 1)
                                        <a href="{{route('menus.status_update',[$menu->id,0])}}" class="btn btn-success">Active</a>
                                        @else
                                        <a href="{{route('menus.status_update',[$menu->id,1])}}" class="btn btn-danger">inActive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-info">
                                            <i class="fa-regular fa-pen-to-square"></i></a>

                                        <a href="{{ route('menus.delete', $menu->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-5">{{ $menus->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
