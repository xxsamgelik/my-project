@extends('app')
@section('content')
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Products</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('main') }}">Home</a> </li>
                    <li><a href="{{ route('main') }}">Admin panel</a> </li>
                    <li class="active"><a href="#">Products</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section id="page-content" class="no-sidebar">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-6">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Short description</th>
                            <th>Price</th>
                            <th>Sale price</th>
                            <th>Category</th>
                            <th>Created at</th>
                            <th>Status</th>
                            <th class="noExport">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $product->email }}</td>
                                <td>{{ $product->is_online }}</td>
                                <td>{{ $product->status }}</td>
                                @if($user->is_online)
                                    <td><span class="badge badge-pill badge-primary">Active</span></td>
                                @else
                                    <td><span class="badge badge-pill badge-danger">Not active</span></td>
                                @endif
                                <td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                    </table>
                    {!! $user->appends(Request::all())->links() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
