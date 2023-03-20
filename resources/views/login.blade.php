@extends('app')
@section('content')
    <section class="fullscreen login-screen" data-bg-parallax="{{ asset('/img/couple2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 center p-50 background-white b-r-6">
                    <h3>Login to your Account</h3>
                    <form action="{{ route('login')  }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="sr-only">Username or Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group form-inline text-left">
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="remember"><small class="m-l-10"> Remember me</small>
                                </label>
                            </div>
                        </div>
                        <div class="text-left form-group">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                    <p class="small">Don't have an account yet? <a href="{{ route('registerPage') }}">Register New Account</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
