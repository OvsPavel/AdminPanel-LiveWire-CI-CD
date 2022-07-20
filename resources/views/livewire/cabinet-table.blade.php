<div class="container-fluid">
    <div class="col-12">
        <div class="title mt-5 mb-5">
            События в работе  <span style="font-size:24px; color:#28a745; padding-left:10px">{{ $accepted_events_count }} </span> 
            <span style="font-size:20px">/</span> 
            <span style="font-size:18px; color:#3c4b64;"> {{ $unclosed_events_count }}</span>
        </div>
        <div class="col-12 scroll">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('emergency_id')" role="button" href="#">
                                Важность
                                @include('includes.sort-icon', ['field' => 'emergency_id'])

                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('station_object_id')" role="button" href="#">
                                Пультовой номер прибора
                                @include('includes.sort-icon', ['field' => 'station_object_id'])
                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('title')" role="button" href="#">
                                Наименование
                                @include('includes.sort-icon', ['field' => 'title'])
                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('start_time')" role="button" href="#">
                                Дата и время
                                @include('includes.sort-icon', ['field' => 'start_time'])
                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('station_object_id')" role="button" href="#">
                                Объект
                                @include('includes.sort-icon', ['field' => 'station_object_id'])
                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <span class="table_title" role="button">
                                Адрес объекта
                            </span>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('emergency_id')" role="button" href="#">
                                Тип события
                                @include('includes.sort-icon', ['field' => 'emergency_id'])
                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <span class="table_title" role="button">
                                Статус
                                @include('includes.sort-icon', ['field' => ''])
                            </span>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <span class="table_title" role="button">
                                Регламентные работы
                                @include('includes.sort-icon', ['field' => ''])
                            </span>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <span class="table_title" role="button">
                                Вложения / гиперссылка
                                @include('includes.sort-icon', ['field' => ''])
                            </span>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <span class="table_title" role="button">
                                Действия
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($accepted_events as $event)
                    @if($event->is_closed == 1)
                    <tr class="alert alert-success">
                        @else
                    <tr>
                        @endif
                        <td scope="row" class="text-center">{{ $event->emergency->type->title }}</td>
                        <td class="text-center">{{ $event->stationObject->number }}</td>
                        <td class="text-center">{{ $event->title }}</td>
                        <td class="text-center">{{ $event->start_time }}</td>
                        <td class="text-center">{{ $event->stationObject->title }}</td>
                        <td class="text-center">{{ $event->stationObject->address }}</td>
                        <td class="text-center">{{ $event->emergency->title }}</td>
                        <td class="text-center">{{ $event->stationObject->status }}</td>
                        <td class="text-center">{{ $event->stationObject->regulatory_works }}</td>
                        <td class="text-center">ссылка</td>
                        <td class="text-center">
                            @if($event->is_closed == 0)
                            <button class="btn btn-sm btn-dark" wire:click="$emit('closeEvent', {{ $event->id }})">
                                Завершить обработку
                            </button>
                            @else
                            <button class="btn btn-sm btn-dark" disabled="true">
                                В АРХИВЕ
                            </button>

                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    <div class="col-12">
        <div class="title mt-5 mb-5">
            Новые события 
            <span style="padding-left:10px; font-size:18px; color:#dc3645;"> {{ $news_events_count }} </span>
        </div>
        <div class="col-12 scroll">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('emergency_id')" role="button" href="#">
                                Важность
                                @include('includes.sort-icon', ['field' => 'emergency_id'])

                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('station_object_id')" role="button" href="#">
                                Пультовой номер прибора
                                @include('includes.sort-icon', ['field' => 'station_object_id'])
                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('title')" role="button" href="#">
                                Наименование
                                @include('includes.sort-icon', ['field' => 'title'])
                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('start_time')" role="button" href="#">
                                Дата и время
                                @include('includes.sort-icon', ['field' => 'start_time'])
                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('station_object_id')" role="button" href="#">
                                Объект
                                @include('includes.sort-icon', ['field' => 'station_object_id'])
                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <span class="table_title" role="button">
                                Адрес объекта
                                @include('includes.sort-icon', ['field' => ''])
                            </span>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <a class="table_title" wire:click.prevent="sortBy('emergency_id')" role="button" href="#">
                                Тип события
                                @include('includes.sort-icon', ['field' => 'emergency_id'])
                            </a>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <span class="table_title" role="button">
                                Статус
                                @include('includes.sort-icon', ['field' => ''])
                            </span>
                        </th>
                        <th scope="col" class="text-center pb-4">
                            <span class="table_title" role="button">
                                Действия
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($new_events as $event)
                    <tr>
                        <td scope="row" class="text-center">{{ $event->emergency->type->title }}</td>
                        <td class="text-center">{{ $event->stationObject->number }}</td>
                        <td class="text-center">{{ $event->title }}</td>
                        <td class="text-center">{{ $event->start_time }}</td>
                        <td class="text-center">{{ $event->stationObject->title }}</td>
                        <td class="text-center">{{ $event->stationObject->address }}</td>
                        <td class="text-center">{{ $event->emergency->title }}</td>
                        <td class="text-center">{{ $event->stationObject->status }}</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-dark" wire:click="$emit('accessEvent', {{ $event->id }})">
                                Взять в обработку
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>