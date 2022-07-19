@extends('layouts.admin')
@section('content')


<div class="col-12">
    <div class="title mt-5 mb-5">Станции</div>
    <div class="flex wrap">
        @foreach($stations as $station)

        <a class="no_link station_block_wrap" href="{{ route('objects', $station->id) }}">
            <div class="station_block flex wrap text-center custom_shadow">
                <div class="col-md-12 col-3">
                    <div class="fire_station_img">
                        <img src="{{ asset('img/fire_station.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-9 station_block_info_section">
                    <span class="station_block_title">{{ $station->title }}</span>
                    <br>
                    <span class="station_block_location">{{ $station->location }}</span>
<br>
                    <span class="station_block_objects_count">
                        Объектов: <b>{{ $station->objects->count() }}</b>
                    </span>
                    <br>
                    <span class="station_block_last_action">
                        Последнее событие:
                        <b>{{ $station->lastEvent() }}</b>
                    </span>


                </div>
            </div>
        </a>
        @endforeach
    </div>

</div>

@endsection