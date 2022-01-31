@extends('front-end.hedaer')
@extends('master')
<section id="content"> <br><br><br><br><br>
    <div class="jumbotron text-center">
        <h1>AG4</h1>
        <p>Labtob</p>
      </div>
        <br><br><br>
      <div class="container">
        <div class="row">
            @foreach ($labs as $lab )    
            <div class="col-sm-4">
                <h3>  </h3>
                <h3>{{ $lab->pro_name }}</h3>
                
                <a href="/home/lab/1/{{ $lab->id }}"><img class="img-div" src="{{ $lab->pro_img }}" alt=""></a>
                <h5>{{ $lab->pro_des }}</h5>
                <h5>{{ $lab->pro_price }}</h5>
                
            </div>
            @endforeach
      </div>
</section>