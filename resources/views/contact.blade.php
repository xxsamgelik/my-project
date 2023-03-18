@extends('app')
@section('content')
    <div class="body-inner">
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Свяжитесь с нами</h1>
                        <p class="lead fw-normal text-muted mb-0">Мы будем рады услышать вас</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text"
                                           placeholder="Введите имя пользователя..." data-sb-validations="required"/>
                                    <label for="name">Логин</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                    </div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                           data-sb-validations="required,email"/>
                                    <label for="email">Почта</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                                        required.
                                    </div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
                                    </div>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="phone" type="tel" placeholder="+375(29)125-9868"
                                           data-sb-validations="required"/>
                                    <label for="phone">Phone number</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                        required.
                                    </div>
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text"
                                              placeholder="Введите ваше обращение здесь..." style="height: 10rem"
                                              data-sb-validations="required"></textarea>
                                    <label for="message">Обращение</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                                        required.
                                    </div>
                                </div>
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Обращение успешно!</div>
                                        Чтобы отправить его, войдите в аккаунт!
                                        <br/>
                                    </div>
                                </div>
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-chat-dots"></i></div>
                        <div class="h5 mb-2">Чат с нами</div>
                        <p class="text-muted mb-0">Общайтесь в чате с одним из наших админов.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-people"></i></div>
                        <div class="h5">Спросите комьюнити</div>
                        <p class="text-muted mb-0">У нас очень дружелюбное комьюнити, вы всегда можете спросить их о чем
                            то.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-question-circle"></i></div>
                        <div class="h5">Поддержка</div>
                        <p class="text-muted mb-0">Зайдите во вкладку FAQ, для того чтобы посмотреть часто задаваемые
                            вопросы, возможно вы найдете ваш ответ там.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-telephone"></i></div>
                        <div class="h5">Позвоните нам</div>
                        <p class="text-muted mb-0">+375291259868</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{asset("/js/jquery.js")}}"></script>
    <script src="{{asset("/js/plugins.js")}}"></script>
    <script src="{{asset("/js/functions.js")}}"></script>
    </body>
    @endsection
    </html>
