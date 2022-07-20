<div class="col-12">
    <div class="title mt-5 mb-5">Пользователи системы</div>

    <div class="col-md-10 offset-md-1 col-12">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="float-right mt-2">
                    <input wire:model="search" class="form-control" type="text" placeholder="Поиск по пользователям...">
                </div>
            </div>
        </div>

        <div class="col-12">
            <p class="w-100">Всего пользователей: <b>{{ $totalCount }}</b></p>
            <br>
            @if ($users->count())

            <div class="col-12 scroll">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">
                                <a class="table_title" wire:click.prevent="sortBy('role_id')" role="button" href="#">
                                    Роль
                                    @include('includes.sort-icon', ['field' => 'role_id'])
                                </a>
                            </th>
                            <th scope="col" class="text-center">
                                <a class="table_title" wire:click.prevent="sortBy('name')" role="button" href="#">
                                    ФИО
                                    @include('includes.sort-icon', ['field' => 'name'])
                                </a>
                            </th>
                            <th scope="col" class="text-center">
                                <a class="table_title" wire:click.prevent="sortBy('email')" role="button" href="#">
                                    Логин
                                    @include('includes.sort-icon', ['field' => 'email'])
                                </a>
                            </th>
                            <th scope="col" class="text-center">
                                <a class="table_title" wire:click.prevent="sortBy('station_id')" role="button" href="#">
                                    Станция
                                    @include('includes.sort-icon', ['field' => 'station_id'])
                                </a>
                            </th>
                            <th scope="col" class="text-center">
                                <a class="table_title" wire:click.prevent="sortBy('password')" role="button" href="#">
                                    Пароль
                                    @include('includes.sort-icon', ['field' => 'password'])
                                </a>
                            </th>
                            <th scope="col">
                                Удалить
                            </th>
                            <!-- <th scope="col">
                        Редактировать
                    </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td scope="row" style="width: 15%;">{{ $user->role->title }}</td>
                            <td style="width: 20%;">{{ $user->name }}</td>
                            <td style="width: 20%;">{{ $user->email }}</td>
                            <td style="width: 15%;">{{ $user->station->location }}</td>
                            <td style="width: 15%;">{{ mb_strimwidth($user->password, 0, 20, '...') }}</td>
                            <td style="width: 5%;">
                                <button class="btn btn-sm btn-warning" wire:click="$emit('delete', {{ $user->id }}, '{{ $user->name }}')">
                                    Удалить
                                </button>
                            </td>
                            <!-- <td>
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
                    По данному запросу ничего не найдено.
                </p>

                @endif
            </div>
        </div>

        @if ($users->count())
        <div class="row">
            <div class="col">
                {{ $users->links() }}
            </div>
        </div>
        @endif

        @include('components.createUserModal')

    </div>
</div>