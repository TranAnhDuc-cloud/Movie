
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Phim Tv / {{ trans('admin.register') }}</title>
<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}" />
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body></body>
<div class="container">
	<section id="content">
		<form action="{{route('register')}}" method="POST">
            @csrf   
			<div>
					<h1>{{ trans('admin.register') }} Form</h1>
				@if (Session::has('error'))
					<div class="alert alert-danger">{{Session::get('error')}}</div>
					<br>
				@endif
				<div>
					<input type="text" placeholder="{{ trans('admin.username') }}" required="" id="username" name="username"/>
				</div>
				@error('username')
					<small class="text-danger">{{ $message }}</small> 
				@enderror
				<div>
					<input type="text" placeholder="{{ trans('admin.fullname') }}" required="" id="fullname" name="fullname"/>
				</div>
				@error('fullname')
					<small class="text-danger">{{ $message }}</small> 
				@enderror
				<div>
					<input type="text" placeholder="Email" required="" id="email" name="email"/>
				</div>
				@error('email')
					<small class="text-danger">{{ $message }}</small> 
				@enderror
				<div>
					<input type="password" placeholder="{{ trans('admin.enter') }} {{ trans('admin.password') }}" name="password" id="password">
				</div>
				@error('password')
					<small class="text-danger">{{ $message }}</small> 
				@enderror
				<div>
					<input type="password" placeholder="{{ trans('admin.password_cofimer') }}" name="password_confirm" id="password">
				</div>
				@error('password_confirm')
					<small class="text-danger">{{ $message }}</small> 
				@enderror
			</div>
			<div class="g-recaptcha" data-sitekey="YOUR SITE KEY"></div>
			<div>
				<input type="submit" value="{{ trans('admin.register') }}" />
				<a href="{{route('home')}}">{{ trans('admin.home') }}</a>
				<a href="{{route('login')}}">{{ trans('admin.login') }}</a>
			</div>
			
		</form>
	</section>
</div>
</body>
</html>