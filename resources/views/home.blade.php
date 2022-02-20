<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Xin chao cac ban</h1>
    <h1>
        {{$name}}
    </h1>
    <h2>{{$dia_chi}}</h2>
    <p>Hom nay la ngay 21/1/22</p>
    {{'Hom nay la thu 6'}}<br>
    {!!'<b>Toi dang test laravel<b>' !!}
    <br>

    @for ($i=0; $i<10; $i++)
        {!! $i.'Hello Lan Anh </br>'!!}
    @endfor

    @php
        $number = 10;
    @endphp
    @if($number > 5)
        {{$number.' > 5 '}}
    @elseif($number < 5)
        {{$number.' <5' }}
    @else
        {{$number.'= 5'}}
    @endif
</body>
</html>
