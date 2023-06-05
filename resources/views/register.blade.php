@extends('app')
@section('content')
    <section class="fullscreen login-screen" data-bg-parallax="{{ asset('/img/couple2.jpg') }}">
        <div class="container container-fullscreen">
            <div class="text-middle">
                <div class="row">
                    <div class="col-lg-5 center p-40 background-white b-r-6">
                        <form class="form-transparent-grey" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Register New Account</h3>
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Name</label>
                                    <label>
                                        <input type="text" name="name" placeholder="Name" class="form-control">
                                    </label>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Email</label>
                                    <label>
                                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                                    </label>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Password</label>
                                    <label>
                                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                                    </label>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Confirm password</label>
                                    <label>
                                        <input type="password" name="password_confirmation" placeholder="Password confirm" class="form-control" required>
                                    </label>
                                </div>
                                <div class="col-lg-12 form-group">
                                    @foreach($errors->all() as $key => $error)
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{$error}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button class="btn" type="submit">Register New Account </button>
                                    <p class="small"><a href="{{ route('google.redirect') }}"><img src="{{asset("/img/google.png")}}" alt="" srcset="" style="width: 40px"></a></p>
                                    <a href="{{ route('git.redirect') }}"><img src="{{asset("/img/github_logo.png")}}" alt="" srcset="" style="width: 30px"></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
