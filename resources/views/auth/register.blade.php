
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Phim Tv / SingUp</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}" />
</head>
<body></body>
<div class="container">
	<section id="content">
		<form action="{{route('register.show')}}" method="POST">
            @csrf   
			<h1>Register Form</h1>
            @if (Session::has('error'))
                <div class="alert alert-danger">{{Session::get('error')}}</div>
				<br>
            @endif
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="username"/>
			</div>
            @error('username')
                <small class="text-danger">{{ $message }}</small> 
            @enderror
            <div>
				<input type="text" placeholder="FullName" required="" id="fullname" name="fullname"/>
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
				<input type="password" placeholder="Nhập Password" name="password" id="password">
			</div>
            @error('password')
                <small class="text-danger">{{ $message }}</small> 
            @enderror
            <div>
				<input type="password" placeholder="Nhập Lại Password" name="password_confirm" id="password">
			</div>
            @error('password_confirm')
                <small class="text-danger">{{ $message }}</small> 
            @enderror
			<div>
				<input type="submit" value="Đăng Ký" />
				<a href="{{route('home')}}">Go Home</a>
				<a href="{{route('login')}}">Login</a>
			</div>
		</form>
	</section>
</div>
</body>
</html>