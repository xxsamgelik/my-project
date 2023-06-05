@extends('app')
@section('content')
    <div class="body-inner">
        <section class="profile-content">
            <div class="profile-image" style="background-image:url({{asset("/img/aboutus.png")}})">
                <div class="container">
                </div>
            </div>
            <div class="profile-bio">
                <h3>{{__('about')}}</h3>
                <br/>
                <p>{{__('about_us')}}</p>
                <div class="m-t-60">
                    <div class="p-progress-bar-container title-up small extra-small color">
                        <div class="p-progress-bar" data-percent="{{$userMale/$user*100}}" data-delay="100" data-type="%">
                            <div class="progress-title">{{__('man_gender')}}</div>
                        </div>
                    </div>
                    <div class="p-progress-bar-container title-up small extra-small color">
                        <div class="p-progress-bar" data-percent="{{$userFemale/$user*100}}" data-delay="100" data-type="%">
                            <div class="progress-title">{{__('women_gender')}}</div>
                        </div>

                    </div>
                </div>
                <hr>
                <p>{{__('statistic')}}</p>
            </div>
        </section>
        <!-- end: SECTION FULLSCREEN -->
    </div> <!-- end: Body Inner -->
@endsection

