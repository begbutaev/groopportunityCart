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





<h1>Корзина</h1>
<p>Оформление заказа</p>
<div class="panel">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Название</th>
            <th>Кол-во</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cart->products as $product)
            <tr>
                <td>
                    {{ $product->name }}
                </td>
                <td>{{$product->pivot->count}}
                    <div class="btn-group form-inline">
                        <form action="{{ route('removeProduct', $product ) }}" method="POST">
                            <button type="submit" class="btn btn-danger"
                                    href=""><span
                                    class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                            @csrf
                        </form>
                        <form action="{{ route('addProduct', $product ) }}" method="POST">
                            <button type="submit" class="btn btn-success"
                                    href=""><span
                                    class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                            @csrf
                        </form>
                    </div>
                </td>
                <td>{{$product->price}} Сомов</td>

            </tr>
        @endforeach



        </tbody>
    </table>

    <br>

    <div class="btn-group pull-right" role="group">
        <a type="button" class="btn btn-success" href="{{route('index')}}">Список товаров</a>
    </div>

</div>

