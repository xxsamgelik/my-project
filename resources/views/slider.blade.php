@extends('app')
@section('content')

    <style>
        .slider-container {
            width: 500px;
            margin: 0 auto;
        }

        .slider {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
        }

        .slider-item {
            text-align: center;
        }

        .slider-item img {
            max-width: 100%;
            height: auto;
        }

        .slider-item h3 {
            margin-top: 10px;
        }

        .slider-item .buttons {
            margin-top: 10px;
        }

        .slider-item .buttons button {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .slider-item .buttons button:hover {
            background-color: #222;
        }
    </style>
    </head>
    <body>
    <div class="slider-container">
        <div class="slider">
            @foreach($sliderItems as $item)
                <div class="slider-item">
                    <img src="{{ $item->image }}" alt="{{ $item->name }}">
                    <h3>{{ $item->name }}</h3>

                    <div class="buttons">
                        <form action="{{ route('likee', ['user_id' => $item->user_id]) }}" method="POST" style="display: inline-block;">
                            @csrf
                            <button type="submit" class="like-button">Лайк</button>
                        </form>

                        <form action="{{ route('skip', ['user_id' => $item->user_id]) }}" method="POST" style="display: inline-block;">
                            @csrf
                            <button type="submit" class="skip-button">Пропустить</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{asset("/js/jquery.js")}}"></script>
    <script src="{{ asset("/js/slick.js") }}"></script>
    <script>
        $(document).ready(function() {
            $('.slider').slick({
                // Остальные настройки слайдера
            });

            // Обработчик события для кнопки "Лайк"
            $('form').on('submit', function(e) {
                e.preventDefault(); // Отмена отправки формы

                var form = $(this);
                var formData = form.serialize();

                // Отправка AJAX-запроса на сервер
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: formData,
                    success: function(response) {
                        $('.slider').slick('slickNext'); // Переключение на следующий слайд
                    },
                    error: function(xhr, status, error) {
                        console.log(error); // Вывод ошибки в консоль
                    }
                });
            });
        });

    </script>
@endsection
