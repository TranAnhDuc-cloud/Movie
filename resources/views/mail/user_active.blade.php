<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>

        <div>
            Thanks you for creating an account with the <a href="{{ route('home') }}">PhimHayTV.Com</a>.
            <br>
            Please follow the link below to verify your email address
            <a href="{{ URL::to('register/active/' . $email_verified) }}">{{ URL::to('register/active/' . $email_verified) }}</a>
            <br/>

        </div>

    </body>
</html>