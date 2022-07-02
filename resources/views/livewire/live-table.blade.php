<div class="col-10 offset-1">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="float-right mt-5">
                <input wire:model="search" class="form-control" type="text" placeholder="Поиск по пользователям...">
            </div>
        </div>
    </div>

    <div class="row">
        <p class="w-100">Всего пользователей: <b>{{ $totalCount }}</b></p>
        <br>
        @if ($users->count())

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        <a wire:click.prevent="sortBy('name')" role="button" href="#">
                            Name
                            @include('includes.sort-icon', ['field' => 'name'])
                        </a>
                    </th>
                    <th scope="col">
                        <a wire:click.prevent="sortBy('email')" role="button" href="#">
                            Email
                            @include('includes.sort-icon', ['field' => 'email'])
                        </a>
                    </th>
                    <th scope="col">
                        <a wire:click.prevent="sortBy('address')" role="button" href="#">
                            Address
                            @include('includes.sort-icon', ['field' => 'address'])
                        </a>
                    </th>
                    <th scope="col">
                        <a wire:click.prevent="sortBy('age')" role="button" href="#">
                            Age
                            @include('includes.sort-icon', ['field' => 'age'])
                        </a>
                    </th>
                    <!-- <th>
                        <a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                        Created at
                        @include('includes.sort-icon', ['field' => 'created_at'])
                        </a>
                    </th> -->
                    <th scope="col">
                        Delete
                    </th>
                    <th scope="col">
                        Edit
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td scope="row">{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->age }}</td>
                    <!-- <td>{{ $user->created_at->format('m-d-Y') }}</td> -->
                    <td>
                        <button class="btn btn-sm btn-danger" wire:click="$emit('delete', {{ $user->id }}, '{{ $user->name }}')">
                            Delete
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-dark">
                            Edit
                        </button>
                    </td>
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

    @if ($users->count())
    <div class="row">
        <div class="col">
            {{ $users->links() }}
        </div>
    </div>
    @endif
</div>