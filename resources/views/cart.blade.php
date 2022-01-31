@extends('front-end.hedaer')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>

        @extends('master')
    </head>
    <body >
        
        <section id="content"> <br><br><br><br><br>
            <div class="jumbotron text-center">
                <h1>shopping cart</h1>
                <p>AG4</p>
                
            </div>
            <br><br><br>
            <div class="container">
                @foreach ($products as $product)
                <div class="row">
                    <div class="col-sm-4">
                        <h3>  </h3>
                        <h3>{{ $product->pro_name }}</h3>
                        <img class="img-div" src="{{ $product->pro_img }}" alt=""></a>
                        <h5> price : {{ $product->pro_price }}</h5>
                        <h5> Qun   : {{ $product->qun }}</h5>
                        @php
                            $total += ((float)$product->pro_price * $product->qun)
                        @endphp
                    </div>
                </div>
                @endforeach
                
            </div>
            <br><br><br>
            <h1>Total :  {{ $total }}</h1><br><br><br>
            

            <a href="/home/cart/do/{{$total}}" class="btn btn-success" style="height:40px;width: 100px;">Done</a>
        
        </section>        
    </body>
</html>

