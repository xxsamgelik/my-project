<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/slick-theme.css') }}" rel="stylesheet">
</head>
<body>
<div class="slider">
    @dd($sliderItems)
    @foreach($sliderItems as $item)
        <div class="slider-item">
            <img src="{{ $item->image }}" alt="{{ $item->name }}">
            <h3>{{ $item->name }}</h3>
        </div>
    @endforeach
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset("/js/slick.js") }}"></script>
<script>
    $(document).ready(function() {
        $('.slider').slick({
            dots: true, // Показывать точки-индикаторы слайдов
            arrows: true, // Показывать стрелки для навигации
            autoplay: true, // Автоматическое прокручивание слайдов
            autoplaySpeed: 3000, // Задержка между автоматической прокруткой слайдов (в миллисекундах)
            // Дополнительные настройки и параметры слайдера
        });
    });

</script>
</body>
</html>
