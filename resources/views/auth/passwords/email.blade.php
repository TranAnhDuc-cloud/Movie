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
<body>
    <div class="container">
        <section id="content">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('password.email') }}" method="POST">
                @csrf   
                <h1>{{ __('Reset Password') }} </h1>
                <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small> 
                    @enderror
                <div >
                    <input style="float: none;" type="submit" value="{{ __('Send') }}" />
                </div>
               
            </form>
        </section>
    </div>
</body>
</html>
