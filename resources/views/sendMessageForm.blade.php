@extends('layouts.admin')

@section('content')

<div class="container">

    <h5>Форма отправки тестового события</h5>

    <div class="alert alert-success" role="alert">
        Для проверки отправки события в Административную часть откройте Административную часть и эту страницу в разных окнах браузера
        <br>
        При отправкке события через данную форму оно автоматически отобразится в интерфейсе Административнйо части сайта
    </div>
    <hr>
    <div class="col-md-6 col-12">
        <form action="{{ route('sendMessage') }}" method="POST" style="display: flex; flex-wrap:wrap; ">
            @csrf
            <label class="col-12" for="title">Название события
                <input class="form-control" type="text" name="title" id="title">
            </label>

            <label class="col-12" for="content">Описание события
                <input class="form-control" type="text" name="content" id="content">
            </label>

            <label class="col-12">тип угрозы</label>

            <div class="col-12" style="display: flex; justify-content: space-around;">
                <div class="col-5 form-check">
                    <label class="form-check-label" for="flexRadioDefault1">Реальная угроза
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="real">
                    </label>
                </div>
                <div class="col-5 form-check">
                    <label class="form-check-label" for="flexRadioDefault2">Учебная тревога
                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="learning" checked>
                    </label>
                </div>
            </div>

            <div class="col-4 offset-10 mt-4">
                <input type="submit" class="btn btn-primary" value="Отправить">

            </div>

        </form>

    </div>
</div>

@endsection