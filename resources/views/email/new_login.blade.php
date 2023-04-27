<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<style>
    .button {
        box-sizing: border-box;
        font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';
        border-radius: 4px;
        color: #fff;
        display: inline-block;
        overflow: hidden;
        text-decoration: none;
        background-color: #2d3748;
        border-bottom: 8px solid #2d3748;
        border-left: 18px solid #2d3748;
        border-right: 18px solid #2d3748;
        border-top: 8px solid #2d3748;
    }
</style>
<body>
<div class="card">
    <p>Новый вход в аккаунт. Имя: {{ $user->name }} Операционная система: {{$agent->platform()}} IP адрес:  {{ $_SERVER['REMOTE_ADDR'] }} Браузер : {{ $agent->browser()}}</p>
</div>
</body>
</html>
