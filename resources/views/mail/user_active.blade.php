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
            <br>
            Please follow the link below to verify your email address
            <br>
            <br>
            <a class="url_email" href="{{ route('register.active',$email_verified)}}">View Account in Client Area</a>
            <br/>
            <style>
                .url_email{
                    box-sizing: border-box;
                    font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';
                    border-radius: 4px;
                    color: #fff;
                    display: inline-block;
                    overflow: hidden;
                    text-decoration: none;
                    background-color: #48bb78;
                    border-bottom: 8px solid #48bb78;
                    border-left: 18px solid #48bb78;
                    border-right: 18px solid #48bb78;
                    border-top: 8px solid #48bb78;
                }
            </style>
        </div>

    </body>
</html>