@extends('layouts.admin')
@section('content')

<div class="col-12">
    <div class="title mt-5 mb-5">Пользователи системы</div>

    <div class="col-10 offset-1">


        <div class="col-12">


            <div class="col-md-6 col-12 flex wrap">
                @foreach($roles as $role)

                <div class="col-12 flex">
                    <div class="col-md-3 col-8">

                        <p>{{ $role->title }}</p>
                    </div>
                    <div class="col-md-3 col-4">
                        <p>{{ $role->usersCount() }}</p>

                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection