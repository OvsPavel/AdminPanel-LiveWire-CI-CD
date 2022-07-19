@extends('layouts.admin')
@section('content')

<div class="col-12">
    <div class="title mt-5 mb-5">Администраторы системы</div>

    <div class="col-md-10 offset-md-1 col-12">
        

        <div class="col-12">


            <div class="col-md-6 col-12 flex wrap">
                @foreach($admins as $admin)

                <div class="col-12 flex">
                    <div class="col-md-3 col-6">

                        <p>{{ $admin->name }}</p>
                    </div>
                    <div class="col-md-3 col-6">
                        <p>{{ $admin->email }}</p>

                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection
