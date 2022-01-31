@extends('front-end.hedaer')
@extends('master')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>profile</title>
    </head>
    <body>
        <section id="content"> <br><br><br><br><br>
            <div class="jumbotron text-center">
                <h1>Profile</h1>    
              </div>
                <br><br><br>
              <div class="container">
                <div class="row">
                    @foreach ($data as $datauser )    
                      <div class="col-sm-4">
                          <h5> Email    : {{ $datauser->email }} </h5>
                          <h5> Address  : {{ $datauser->address }} </h5>
                          <h5> FullName : {{ $datauser->fullname }} </h5>
                          <h5> Total    : {{ $datauser->total }} </h5>
                      </div>
                    @endforeach
                </div>    
              </div>
        </section>
    </body>
</html>