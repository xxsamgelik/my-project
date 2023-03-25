@extends('app')
@section('content')
    <section id="page-title">
        <div class="container">
            <div class="page-title">
                <h1>Мой профиль</h1>
            </div>
        </div>
    </section>
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">Account details</span>
                            <p class="text-muted">You will receive an email notification to confirm this action in
                                order to completed changes.</p>
                        </div>
                        <div class="card-body">
                                    <p>Пол: {{$profile->information->sex ?? "null"}}</p>
                                    <p>Семейное положение: {{$profile->information->status ?? "null"}}</p>
                                    <p>Дата рождения: {{$profile->information->status ?? "null"}}</p>
                                    <p>Страна: {{$profile->information->status ?? "null"}}</p>
                            <a type="submit" class="btn m-t-30 mt-3" href="{{route('profile.update')}}">Изменить</a>
                            </form>
                        </div>
                    </div>
                    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
                    @endsection
                    <script src="js/jquery.js"></script>
                    <script src="js/plugins.js"></script>
                    <script src="js/functions.js"></script>
                    <script src="plugins/validate/validate.min.js"></script>
                    <script src="plugins/validate/valildate-rules.js"></script>
                </div>
            </div>
        </div>
    </section>
    </div>
    </body>
    </html>
