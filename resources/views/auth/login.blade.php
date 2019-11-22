<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @if(Session::has('message'))
            <div style="background:#2980b9; color:#fff; padding: 5px 15px;">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="flex-center position-ref full-height">
            @if(auth()->check())
                <h4>You are logged with email:  <strong>{{ auth()->user()->email }}</strong></h4> <br>
                <a class="btn btn-xs btn-danger" href="{{ route('auth.do_logout') }}">Sign-out</a>
            @else
                <form action="{{ route('auth.do_login') }}" method="POST">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            @endif
        </div>
    </body>
</html>
