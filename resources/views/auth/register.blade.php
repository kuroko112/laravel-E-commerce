@extends('front-end.hedaer')
@extends('master')
<!DOCTYPE html>
<html>
    <head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('layout/css/style.css') }}">
    </head>
    <body><br><br><br><br><br>
        <div class="header">
            <h2>Register</h2>
        </div>
            
        <form method="post" action="{{ url('postregister') }}">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="name" value="">
            </div>
            
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="">
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            
            @csrf


            <div class="input-group">
  		        <label>Address</label>
  		        <input type="text" name="address">
  	        </div>

            <div class="input-group">
  		        <label>FullName</label>
  		        <input type="text" name="fullname">
  	        </div>

            <div class="input-group">
            <button type="submit" class="btn btn-outline-success" name="reg_user">Register</button>
            </div>
            <p>
                Already a member? <a href="{{ URL::to('home/login') }}">Sign in</a>
            </p>
        </form>
    </body>


