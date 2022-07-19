<div class="col-md-10 offset-md-1 col-12">
    <!-- <div class="row mb-4">
        <div class="col-md-12">
            <div class="float-right mt-5">
                <input wire:model="search" class="form-control" type="text" placeholder="Поиск по пользователям...">
            </div>
        </div>
    </div> -->


    <div class="col-12">
        <div class="title mt-5 mb-5 text-center">
            <h3 class="station_object_title">{{ $station->title }}</h3>
            <h4 class="station_object_location">{{ $station->location }}</h4>
            <h5 class="station_object_count">Объектов : {{ $station->objects->count() }}</h5>
        </div>
        @if ($objects->count())
    </div>
    <div class="col-12 scroll">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-center pb-4">
                        <a class="table_title" wire:click.prevent="sortBy('number')" role="button" href="#">
                            Номер станции
                            @include('includes.sort-icon', ['field' => 'number'])
                        </a>
                    </th>
                    <th scope="col" class="text-center pb-4">
                        <a class="table_title" wire:click.prevent="sortBy('station_type_id')" role="button" href="#">
                            Тип объктовой станции
                            @include('includes.sort-icon', ['field' => 'station_type_id'])
                        </a>
                    </th>
                    <th scope="col" class="text-center pb-4">
                        <a class="table_title" wire:click.prevent="sortBy('antenna_type_id')" role="button" href="#">
                            Тип антенны
                            @include('includes.sort-icon', ['field' => 'antenna_type_id'])
                        </a>
                    </th>
                    <th scope="col" class="text-center pb-4">
                        <a class="table_title" wire:click.prevent="sortBy('title')" role="button" href="#">
                            Наименование объекта
                            @include('includes.sort-icon', ['field' => 'title'])
                        </a>
                    </th>
                    <th scope="col" class="text-center pb-4">
                        <a class="table_title" wire:click.prevent="sortBy('address')" role="button" href="#">
                            Адрес объекта
                            @include('includes.sort-icon', ['field' => 'address'])
                        </a>
                    </th>
                    <th scope="col" class="text-center pb-4">
                        <a class="table_title" wire:click.prevent="sortBy('status')" role="button" href="#">
                            Статус
                            @include('includes.sort-icon', ['field' => 'status'])
                        </a>
                    </th>
                    <th scope="col" class="text-center pb-4">
                        <a class="table_title" wire:click.prevent="sortBy('contract_type_id')" role="button" href="#">
                            Тип договора с ЦТМ
                            @include('includes.sort-icon', ['field' => 'contract_type_id'])
                        </a>
                    </th>
                    <th scope="col" class="text-center pb-4">
                        <a class="table_title" wire:click.prevent="sortBy('sphere_of_activity_id')" role="button" href="#">
                            Сфера деятельности
                            @include('includes.sort-icon', ['field' => 'sphere_of_activity_id'])
                        </a>
                    </th>
                    <!-- <th scope="col" class="text-center pb-4">
                            Редактировать

                        </a>
                    </th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($objects as $object)
                <tr>
                    <td scope="row" class="text-center">{{ $object->number }}</td>
                    <td class="text-center">{{ $object->stationType->title }}</td>
                    <td class="text-center">{{ $object->antennaType->title }}</td>
                    <td class="text-center">{{ $object->title }}</td>
                    <td class="text-center">{{ $object->address }}</td>
                    <td class="text-center">{{ $object->status }}</td>
                    <td class="text-center">{{ $object->contractType->title }}</td>
                    <td class="text-center">{{ $object->sphereOfActivities->title }}</td>
<!-- 
                    <td class="text-center">
                        <button class="btn btn-sm btn-dark">
                            Редактировать
                        </button>
                    </td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
        @else

        <p>
            К данной станции не прикреплен ни один объект
        </p>

        @endif
    </div>

    @if ($objects->count())
    <div class="row">
        <div class="col">
            {{ $objects->links() }}
        </div>
    </div>
    @endif
</div>