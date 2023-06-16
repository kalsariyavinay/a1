@extends('admin.layout.app')
@section('content')

{{--

step-1  config->mail.php->return [
        username' => ' ',
        password' => ' ', 
    
step-2  .env->
        MAIL_USERNAME=
        MAIL_PASSWORD=
        MAIL_FROM_ADDRESS=

    --}}
<section class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Users
                        <input id="myInput" type="text" placeholder="Search data" class="form-control w-25 mb-3" style="float: right">
                        <a class="btn text-white" style="background-color: #696cff" href="{{ route('users.create') }}">+</a></h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Created_at</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable" class="table-border-bottom-0">
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email }}</td>
                                    <td>{{get_formatted_date($user->created_at, 'd-m-Y') }}</td>
                                    <td>
                                        @if($user->is_active == 1)
                                        <a href="{{route('users.status_update',[$user->id,0])}}" class="btn btn-success">Active</a>
                                        @else
                                        <a href="{{route('users.status_update',[$user->id,1])}}" class="btn btn-danger">inActive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">
                                            <i class="fa-regular fa-pen-to-square"></i></a>

                                        <a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-5">{{ $users->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
