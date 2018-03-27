<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- App CSS -->
        <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">

        <!-- Styles -->
        <style>
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="flex-center">
            <div class="content">
                <div class="title">
                    <h1>Coalition Technologies Skills Test</h1>
                </div>

                <div class="links">
                    <a title="Click Here" class="btn btn-sm btn-warning" href="/products"><h4>Products Webpage</h4></a>
                </div>
            </div>
        </div>
        @yield('content')
    </body>
</html>
