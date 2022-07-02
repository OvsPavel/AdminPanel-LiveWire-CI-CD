<div>
    <div class="col-12">

        <h5>Зависимые списки</h5>

        <div class="col-12 flex">
            <div class="col-5">
                <label for="category">Категория</label>
                <select class="form-control" id="category" wire:model="categoryId">
                    @foreach($categories as $cat)
                    <option class="form-control" value="{{ $cat->id }}">{{ $cat->title }}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-5">
                <label for="subcategory">Подкатегория</label>
                <select class="form-control" id="subcategory" wire:model="subCategoryId">

                    @foreach($subCategories as $sub_cat)
                    <option class="form-control" value="{{ $sub_cat->id }}">{{ $sub_cat->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>
</div>