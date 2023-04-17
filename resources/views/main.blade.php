@extends('app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="text-medium m-t-0">{{__('welcome')}}</h2>
                    <div class="seperator"></div>
                    <p class="lead">{{__('main_paragraph')}}</p>
                </div>
                <div class="col-lg-7">
                    <img src="{{asset("/img/couple.jpg")}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row m-t-40">
                <div class="col-lg-4">
                    <img src="{{asset("/img/couple2.jpg")}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-4">
                    <img src="{{asset("/img/couple3.jpg")}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4">
                    <img src="{{asset("/img/couple4.jpg")}}" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="margin-left: 300px">
                    <h3 style="text-align: center">{{__('why_me')}}</h3>
                    <p>Сайт для знакомств в Минске  имеет следующие преимущества:
                        Множество реальных анкет из города, области и по всей Беларуси;
                        Только настоящие фото парней и девушек без ботов или спама;
                        Оперативное реагирование службы техподдержки на все вопросы
                    </p>
                    <p>
                        Интересуют знакомства в Минске без регистрации бесплатно и в удобное вам время? На Teamo зарегистрировано более 18 млн мужчин и женщин. Здесь вы найдете друга для общения, партнера для брака или просто хорошего собеседника. Ждем вас. Все возможности сервиса к вашим услугам..</p>
                </div>
            </div>
        </div>
    </section>
    <div class="seperator m-b-0"></div>
        </div>
    </div>
@endsection
<a id="scrollTop" class="scroll-to" href="body"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<script src="{{asset("/js/jquery.js")}}"></script>
<script src="{{asset("/js/plugins.js")}}"></script>
<script src="{{asset("/js/functions.js")}}"></script>
</body>
</html>
