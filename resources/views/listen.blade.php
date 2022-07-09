<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>BroadCast</title>
</head>


<body>
    
    Страница для отладки BroadCats`a

    <div id="app">
        <br>
        <div class="container">
            <div class="container">

                <div class="row" style="display: flex; align-items:center;width: 200px; justify-content: space-around;">
                    <div class="col-10">
                        <span>
                            Реальная тревога
                        </span>
                    </div>
                    <div class="col-2">
                        <div v-if="status_real" class="indicator" id="real"> </div>
                    </div>
                </div>


                <br>
                <div class="row" style="display: flex; align-items:center;width: 200px; justify-content: space-around;">
                    <div class="col-10">
                        <span>
                            Учебная тревога
                        </span>
                    </div>
                    <div class="col-2">
                        <div v-if="status_learning" class="indicator" id="learning"> </div>
                    </div>
                </div>


            </div>
        </div>
        <div id="action">
            <div v-if="status_real" class="danger">
                <b>@{{ message_title }}</b>
                <br>
                @{{ message_content }}
            </div>

            <div v-if="status_learning" class="not_danger">
                <b>@{{ message_title }}</b>
                <br>
                @{{ message_content }}
            </div>
            
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        const message = '';

        function showMessage() {
            document.getElementById('action').classList.add('active');
        }

        function hideMessage() {
            document.getElementById('action').classList.remove('active');
        }
    </script>
</body>

</html>