@extends('front-end.hedaer')
@extends('master')
<section id="content"> <br><br><br><br><br>
    <div class="jumbotron text-center">
        <h1>AG4</h1>
        <p>T.V</p>
      </div>
        <br><br><br>
      <div class="container">
        <div class="row">
            @foreach ($tv as $tv )    
            <div class="col-sm-4">
                <h3>{{ $tv->pro_name }}</h3>
                <a href="/home/elc/TV/3/{{ $tv->id }}"><img class="img-div" src="{{ $tv->pro_img }}" alt=""></a>
                <h5>{{ $tv->pro_des }}</h5>
                <h5>{{ $tv->pro_price }}</h5>
            </div>
            @endforeach
      </div>
</section>