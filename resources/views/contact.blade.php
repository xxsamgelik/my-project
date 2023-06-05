@extends('app')
@section('content')
    @include('flash-message')

    <section id="page-title" data-bg-parallax="images/parallax/5.jpg">
        <div class="container">
            <div class="page-title">
                <h1>{{__('contact_us')}}</h1>
                <span>{{__('we_close')}}</span>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-left: 380px">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">{{__('get_touch')}}</h3>
                    <p>{{__('we_strong')}}</p>
                    <div class="m-t-30">
                        <form enctype="multipart/form-data" action="{{ route('contacts.feedback') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">{{__('name')}}</label>
                                    <label>
                                        <input value="{{ old('name') }}" type="text" aria-required="true" name="name" class="form-control name" placeholder="{{__('enter_name')}}">
                                    </label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">{{__('email')}}</label>
                                    <label>
                                        <input type="email" value="{{ old('email') }}" aria-required="true" name="email" class="form-control email" placeholder="{{__('enter_email')}}">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">{{__('message')}}</label>
                                <label>
                                    <textarea type="text" name="message" rows="5" class="form-control" placeholder="{{__('enter_message')}}"></textarea>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="number">{{__('number')}}</label>
                                <label>
                                    <input type="text" value="{{ old('number') }}" aria-required="true" name="number" class="form-control email" placeholder="{{__('enter_number')}}">
                                </label>

                            </div>
                            @foreach($errors->all() as $key => $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{$error}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            @endforeach
                            @auth
                            <button class="btn" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            @endauth
                            @guest
                                <a href="{{route('login')}}" class="btn">Register</a>
                            @endguest
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
