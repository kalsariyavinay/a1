@extends('admin.layout.app')
@section('content')

<section class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Contact-Us
                        <input id="myInput" type="text" placeholder="Search data" class="form-control w-25 mb-3" style="float: right">
                    </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable" class="table-border-bottom-0">
                                @foreach ($contactuss as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->email}}</td>
                                    <td>{{$cat->phone_number}}</td>
                                    <td>{{$cat->msg_subject}}</td>
                                    <td>{{$cat->message}}</td>
                                    <td>{{get_formatted_date($cat->created_at, 'd-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('contactus.edit', $cat->id) }}" class="btn btn-info">
                                            <i class="fa-regular fa-pen-to-square"></i></a>

                                        <a href="{{ route('contactus.delete', $cat->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-5">{{ $contactuss->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection