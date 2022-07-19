@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Для регситрации в системе обратитесь к Админситрации Сервиса</div>

                <div class="card-body text-center">
                    <a class="btn btn-primary" href="{{ route('login') }}">Авторизоваться</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
