
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
<div class="container">
	<section id="content">
		<form method="POST" action="{{ route('password.update') }}">
            @csrf
            <h1>{{ __('Reset Password') }}</h1>
            <input type="hidden" name="token" value="{{ $token }}">
                <div>
					<input type="text" class=" @error('email') is-invalid @enderror" placeholder="Email" required="" id="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus/>
				</div>
				@error('email')
					<small class="text-danger">{{ $message }}</small> 
				@enderror
                <div>
                    <input type="password" placeholder="{{ trans('admin.enter') }} {{ trans('admin.password') }}" name="password" id="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                </div>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small> 
                    @enderror
                    <div>
                        <input type="password" placeholder="{{ trans('admin.password_cofimer') }}" name="password_confirmation" id="password" equired autocomplete="new-password">
                    </div>
            <div class="form-group row mb-0 justify-content-center">
                <div class="col-md-6 offset-md-4 p-2 reset">
                    <input type="submit" style="float: none" class="btn" value="{{ __('Reset') }}">
                        
                </div>
            </div>
        </form>
	</section>
</div>
</body>
</html>

