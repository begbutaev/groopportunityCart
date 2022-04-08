<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>


<h1>{{ $product->name }}</h1>
<p>Цена: <b>{{ $product->price }} ₽</b></p>
<p>{{ $product->description }}</p>

<form action="{{ route('addProduct',$product) }}" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

    @csrf
</form>

<div class="btn-group pull-right" role="group">
    <a type="button" class="btn btn-success" href="{{route('index')}}">Список товаров</a>
</div>

<div class="btn-group pull-right" role="group">
    <a type="button" class="btn btn-success" href="{{route('cart-index')}}">Корзина</a>
</div>
