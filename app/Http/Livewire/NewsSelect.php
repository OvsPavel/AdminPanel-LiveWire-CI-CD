<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;

class NewsSelect extends Component
{
    public $categories;
    public $categoryId = 1;
    public $subCategories;
    public $subCategoryId;

    public function mount()
    {
        $this->categories = Category::orderBy('id')->get();
        $this->subCategories = [];

        $this->getSubCategories();
    }

    public function updatedcategoryId()
    {
        $this->getSubCategories();
    }

    public function getSubCategories()
    {
        if ($this->categoryId != '') {
            $this->subCategories = SubCategory::where('category_id', $this->categoryId)->get();
            $this->subCategoryId = $this->subCategories[0]->id;
        } else {
            $this->subCategoryId = [];
        }
    }



    public function render()
    {

        return view('livewire.news-select');
    }
}
