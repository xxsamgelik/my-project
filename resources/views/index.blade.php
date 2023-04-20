@extends('app')
@section('content')
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Пользователи</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('main') }}">Home</a> </li>
                    <li><a href="{{ route('main') }}">Admin panel</a> </li>
                    <li class="active"><a href="#">Пользователи</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section id="page-content" class="no-sidebar">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <a href="{{ route('export.excel') }}" class="btn btn-light"><i class="icon-plus"></i>Export to excel</a>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>Имя пользователя</th>
                            <th>Почта</th>
                            <th>Статус</th>
                            <th>Активность сейчас</th>
                            <th>Пол</th>
                            <th>Страна</th>
                            <th>Дата рождения</th>
                            <th>Дата создания</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->status ?? "Не указано" }}</td>
                                @if($user->is_online)
                                    <td><span class="badge badge-pill badge-primary">Active</span></td>
                                @else
                                    <td><span class="badge badge-pill badge-danger">Not active</span></td>
                                @endif
                                <td>
                                    {{$user->information->sex ?? "Не указано"}}
                                </td>
                                <td>
                                    {{$user->information->country ?? "Не указано"}}
                                </td>
                                <td>
                                    {{$user->information->date_birthday ?? "Не указано"}}
                                </td>
                                <td>
                                    {{$user->created_at ?? "Не указано"}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
{{--                    {!! $user->appends(Request::all())->links() !!}--}}
                </div>
            </div>
        </div>
    </section>
@endsection
