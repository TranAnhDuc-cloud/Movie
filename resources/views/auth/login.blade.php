
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PhimTV / {{ trans('admin.login') }}</title>
<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body></body>
<div class="back"><a href="{{route('home')}}">{{ trans('admin.back') }}</a></div>
<style>
	
</style>
<div class="container">
	<section id="content">
		<form action="{{route('login')}}" method="POST">
            @csrf   
			<h1>{{ trans('admin.login') }} Form</h1>
            @if (Session::has('error'))
                <div class="alert alert-danger">{{Session::get('error')}}</div>
				<br>
            @endif
			@if (Session::has('success'))
				<div class="alert alert-success">{{Session::get('success')}}</div>
				<br>
			@endif
			<div>
				<input type="text" placeholder="{{ trans('admin.enter') }} {{ trans('admin.username') }}" id="username" name="username"/>
			</div>
				@error('username')
					<small class="text-danger">{{ $message }}</small> 
				@enderror
			<div>
				<input type="password" placeholder="{{ trans('admin.enter') }} {{ trans('admin.password') }}" name="password" id="password">
			</div>
				@error('password')
					<small class="text-danger">{{ $message }}</small> 
				@enderror
				
				<a href="{{ url('/auth/redirect/facebook') }}" class="facebook">
					<i class="fab fa-facebook-square"></i>
					<div>Login With Facebook</div>
				</a>
				<a href="{{ url('/auth/redirect/google') }}" class="google">
					<i class="fab fa-google"></i>
					<div>Login With Google</div>
				</a>
				<style>
				
				</style>
			<div>
				<input type="submit" value="{{ trans('admin.login') }}" />
				<a href="{{route('password.request')}}">{{ trans('admin.lostpassword') }} ?</a>
				<a href="{{route('register')}}">{{ trans('admin.register') }}</a>
			</div>
		</form>
	</section>
</div>
</body>
</html>