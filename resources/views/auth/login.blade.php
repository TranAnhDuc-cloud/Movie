
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PhimTV / SingIn</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}" />
</head>
<body></body>
<div class="container">
	<section id="content">
		<form action="{{route('login.show')}}" method="POST">
            @csrf   
			<h1>Login Form</h1>
            @if (Session::has('error'))
                <div class="alert alert-danger">{{Session::get('error')}}</div>
				<br>
            @endif
			@if (Session::has('success'))
				<div class="alert alert-success">{{Session::get('success')}}</div>
				<br>
			@endif
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="username"/>
			</div>
				@error('username')
					<small class="text-danger">{{ $message }}</small> 
				@enderror
			<div>
				<input type="password" placeholder="Nhập Password" name="password" id="password">
			</div>
				@error('password')
					<small class="text-danger">{{ $message }}</small> 
				@enderror
			<div>
				<input type="submit" value="Log in" />
				<a href="#">Lost your password?</a>
				<a href="{{route('register')}}">Register</a>
			</div>
		</form>
	</section>
</div>
</body>
</html>