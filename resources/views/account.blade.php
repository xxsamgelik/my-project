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
                        <form id="form1" class="form-validate" method="POST" action="{{route("account.update")}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" name="sex" required>
                                        <option value="">Select your gender</option>
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date_birthday">Date of Birth</label>
                                    <input class="form-control" type="date" name="date_birthday" required value="{{$user->information?->date_birthday}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="">Select your gender</option>
                                        <option>В поиске</option>
                                        <option>Замужем</option>
                                        <option>В отношениях</option>
                                    </select>
                                </div>
                            </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="country">Country</label>
                                        <select name="country" class="form-control">
                                            <option value=""></option>
                                            @foreach($geos as $key => $geo)
                                                @if($profile->information?->country?? "null" == $key)
                                                    <option value="{{ $key }}" selected>{{ $geo->native }}</option>
                                                @else
                                                    <option value="{{ $key }}">{{ $geo->native }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            <button type="submit" class="btn m-t-30 mt-3">Сохранить</button>
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
