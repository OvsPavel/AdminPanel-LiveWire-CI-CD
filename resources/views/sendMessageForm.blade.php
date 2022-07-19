@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="title mt-5 mb-5">Форма отправки тестового события</div>
    
    <div class="alert alert-success how_it_work" role="alert">
        Для проверки отправки события в Административную часть откройте Административную часть и эту страницу в разных окнах браузера и выполните следующие шаги:
        <br>
        <br>
        - выберите Станцию и объект на Станции
        <br>
        - нажмите на кнопку <b> "Отправить тестовое событие" </b>
        <br>
        - сообщение о произошедшем событии автоматически отобразится в интерфейсе Административной части сайта
    </div>
    <hr>
    <div class="col-12">
        <form action="{{ route('sendMessage') }}" method="POST" style="display: flex; flex-wrap:wrap; ">
            @csrf

            <livewire:object-select />
            <!-- <label for="station">Станция</label> -->
            <!-- <select name="station" id="station">
                @foreach($objects as $object)
                <option value="{{ $object->id }}">{{ $object->title }}</option>
                @endforeach
            </select> -->

            <!-- <label class="col-12" for="title">Название события
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
            </div> -->

            <div class="col-md-3 offset-md-4 col-10 offset-1 mt-4">

                <input type="submit" class="btn btn-primary w-100" value="Отправить тестовое событие">

            </div>

        </form>

    </div>
</div>

@endsection