<!-- Button Кнопка вызова модального окна добавления пользователя -->
<button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#createUser">
    Добавить пользователя
</button>

<!-- Модальное окно добавления пользователя -->
<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="createUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header"> -->
            <h5 class="text-center" id="createUserLabel">Добавление пользователя</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            <!-- </div> -->
            <div class="modal-body">

                <form class="col-10 offset-1" action="{{ route('users.create') }}" method="POST">
                    @csrf
                    <label class="col-12">ФИО
                        <span class="required">*</span>
                        <input class="form-control" type="text" name="name" required="true">
                    </label>

                    <label class="col-12">Email
                        <span class="required">*</span>
                        <input class="form-control" type="email" name="email" required="true">
                    </label>

                    <label class="col-12">Адрес
                        <span class="required">*</span>
                        <input class="form-control" type="text" name="address" required="true">
                    </label>

                    <label class="col-12">Пароль
                        <span class="required">*</span>
                        <input class="form-control" type="text" name="password" required="true">
                    </label>
                    <div class="col-12 flex wrap">
                        <label class="col-md-6 col-12 p-2">Роль
                            <span class="required">*</span>
                            <select class="form-control" name="role_id" id="" required="true">
                                @foreach(App\Models\Role::all() as $role)
                                <option value="{{ $role->id }}">{{ $role->title }}</option>
                                @endforeach
                            </select>
                        </label>

                        <label class="col-md-6 col-12 p-2">Станция
                            <span class="required">*</span>
                            <select class="form-control" name="station_id" id="" required="true">
                                @foreach(App\Models\Station::all() as $station)
                                <option value="{{ $station->id }}">{{ $station->title }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="col-12 flex wrap center mt-3" style="justify-content: space-between;">
                        <button class="col-md-5 col-12 btn btn-primary mb-2" type="submit">Добавить пользователя</button>
                        <button class="col-md-5 col-12 btn btn-warning mb-2" data-dismiss="modal">Закрыть</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Модальное окно добавления пользователя -->