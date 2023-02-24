<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    public $category_id;

    use WithPagination;

    public function deleteCategory()
    {
        $category = Category::find($this->category_id);
        $category->delete();
        session()->flash('message', 'Category has been deleted successfully!');
    }

    public function render()
    {
        $categories = Category::orderBy('name', 'asc')->paginate(5);
        return view('livewire.admin.admin-category-component', ['categories' => $categories]);
    }
}
