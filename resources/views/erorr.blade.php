@extends('front-end.hedaer')
@extends('master')

<br><br><br><br><br><br><br>
<section>
    <div class="container">
        <div class="row-cols-1">
            
                <h1>
                    Erorr Your balance is not enough for your current catch:{{ $total_user }} you must recharge and try again
                </h1>
                <a href="/home" class="btn btn-outline-success">Home</a>
        </div>
    </div>
</section>






