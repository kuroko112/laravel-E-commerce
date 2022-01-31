@extends('front-end.hedaer')
@extends('master')
<section id="content"> <br><br><br><br><br>
    <div class="jumbotron text-center">
        <h1>AG4</h1>
        <p>Mobile</p>
      </div>
        <br><br><br>
      <div class="container">
        <div class="row">
            @foreach ($mobile as $mobile )    
            <div class="col-sm-4">

                <h3>{{ $mobile->pro_name }}</h3>
                
                <a href="/home/mob/2/{{ $mobile->id }}"><img class="img-div" src="{{ $mobile->pro_img }}" alt=""></a>
                <h5>{{ $mobile->pro_des }}</h5>
                <h5>{{ $mobile->pro_price }}</h5>
            </div>
            @endforeach
      </div>
</section>