@extends('app')

@section('content')
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>{{__('my_account')}}</h1>
            </div>
        </div>
    </section>

    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">{{__('account_details')}}</span>
                            <p class="text-muted">{{__('account_description')}}</p>
                        </div>
                        <div class="card-body">
                            <form id="form1" class="form-validate" method="POST" action="{{route("account.update")}}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="gender">{{__('gender')}}</label>
                                        <label>
                                            <select class="form-control" name="sex" required>
                                                <option value="">{{__('select_gender')}}</option>
                                                <option @if($user->information?->sex == __('female')) selected @endif>{{__('female')}}</option>
                                                <option @if($user->information?->sex == __('male')) selected @endif>{{__('male')}}</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="date_birthday">{{__('birthday_date')}}</label>
                                        <label>
                                            <input class="form-control" type="date" name="date_birthday" required value="{{$user->information?->date_birthday}}">
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="status">{{__('status')}}</label>
                                        <label>
                                            <select class="form-control" name="status" required>
                                                <option value="">{{__('select_status')}}</option>
                                                <option @if($user->information?->status == __('search_status')) selected @endif>{{__('search_status')}}</option>
                                                <option @if($user->information?->status == __('married_status_for_female')) selected @endif>{{__('married_status_for_female')}}</option>
                                                <option @if($user->information?->status == __('relation_shipment_status')) selected @endif>{{__('relation_shipment_status')}}</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="country">{{__('country')}}</label>
                                        <label>
                                            <select name="country" class="form-control">
                                                <option value=""></option>
                                                @foreach($geos as $key => $geo)
                                                    @if($user->information?->country ?? "null" == $key)
                                                        <option value="{{ $key }}" selected>{{ $geo->native }}</option>
                                                    @else
                                                        <option value="{{ $key }}">{{ $geo->native }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn m-t-30 mt-3">{{__('btn_save')}}</button>
                            </form>
                        </div>
                    </div>
                    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
