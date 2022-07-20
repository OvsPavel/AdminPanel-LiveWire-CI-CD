<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Проект "Стрелец-Мониторинг"</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <style>
        .card-header {
            padding: 20px;
            text-transform: uppercase;
        }

        .auth_block {
            min-height: 100vh;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #3c4b64;

        }

        .btn-primary {
            background-color: #321fdb;
            color: white;
        }

        .login_page_title {
            margin: 30px;
            text-align: center;
            color: white;
        }

        .card-body {
            background-color: none;
        }

        .login_btn {
            width: 200px;
            background-color: white;
            color: #3c4b64;
            margin-top: 40px;
            font-weight: 700;
            padding: 8px;
            border-radius: 10px;
            border: 1px solid #3c4b64;
        }

        /* @media screen and (max-width: 900px) {
            .auth_block {
                height: 100%;
                width: 100%;
                padding: 0;
                display: flex;
                justify-content: center;
                background-color: #3c4b64;
            }
        }

        @media screen and (max-width: 1300px) {
            .auth_block {
                height: 100vh;
            }
        } */
    </style>
    <div id="app" class="auth_block">


        <main class="py-4 w-100">
            @yield('content')
        </main>
    </div>
</body>

</html>