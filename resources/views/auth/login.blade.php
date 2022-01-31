@extends('front-end.hedaer')
@extends('master')
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('layout/css/style.css') }}">
</head>
<body><br><br><br><br><br>
  <div class="header">
  	<h2>Login</h2>
  </div>
	<!-- here form to input the Data  -->
  <form method="post" action="{{ url('postlogin') }}">
  	
  	<div class="input-group">
  		<label class="gg">Username</label>
  		<input type="email" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>

	@csrf

  	<div class="input-group">
  		<button type="submit" class="btn btn-outline-success" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="{{ URL::to('home/register') }}">Sign up</a>
  	</p> 
  	 
  </form>
</body>
</html>