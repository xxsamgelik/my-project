@extends('app')
@section('content')
    <section id="page-title" data-bg-parallax="images/parallax/5.jpg">
        <div class="container">
            <div class="page-title">
                <h1>Contact Us</h1>
                <span>The most happiest time of the day!.</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">Pages</a> </li>
                    <li class="active"><a href="#">Contact Us</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row" style="margin-left: 380px">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Get In Touch</h3>
                    <p>The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.</p>
                    <div class="m-t-30">
                        <form enctype="multipart/form-data" action="{{ route('contacts.feedback') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input value="{{ old('name') }}" type="text" aria-required="true" name="name" class="form-control name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" value="{{ old('email') }}" aria-required="true" name="email" class="form-control email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="message" rows="5" class="form-control" placeholder="Enter your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="number">Number</label>
                                <input type="text" value="{{ old('number') }}" aria-required="true" name="number" class="form-control email" placeholder="Enter your number">

                            </div>
                            @foreach($errors->all() as $key => $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{$error}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            @endforeach
                            <button class="btn" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
