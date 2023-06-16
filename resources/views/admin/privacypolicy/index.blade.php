@extends('admin.layout.app')
@section('content')

<section class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Privacy-Policy</h5><br>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Message</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable" class="table-border-bottom-0">
                                @foreach ($privacypolicys as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->message}}</td>
                                    <td>{{get_formatted_date($cat->created_at, 'd-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('privacypolicy.edit', $cat->id) }}" class="btn btn-info">
                                            <i class="fa-regular fa-pen-to-square"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection