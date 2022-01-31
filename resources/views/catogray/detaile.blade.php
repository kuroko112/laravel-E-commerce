@extends('front-end.hedaer')
@extends('master')
<section id="content"> <br><br><br><br><br>
    <div class="jumbotron text-center">
        <h1>AG4</h1>
        <p>Detailes</p>
      </div>
        <br><br><br>
      <div class="container">
        <div class="row">
            @foreach ($product as $product )    
              <div class="col-sm-4">
                  <form action="{{ url('/home/cart/incart') }}" method="post">

                    <label for="">Price</label><h3> {{ $product->pro_price }} </h3>
                    <h3>Qun :  <input    name="qun" type="text"> </h3>
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="submit" value="Buy" class="btn btn-success"><br>
                    @csrf
                  </form> 
              </div>
              <div class="col-sm-4">
                  <h5> {{ $product->pro_des }} </h5>
              </div>
              <div class="col-sm-4">
                <h2>{{ $product->pro_name }}</h2>
                  <img class="img-div" src="{{ $product->pro_img }}" alt="">
              </div>
            @endforeach
        </div>    
      </div>
</section>