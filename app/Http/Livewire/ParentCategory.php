<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ParentCategory extends Component
{
    public $name;

    /**
     * @var Category
     */
    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.parent-category', [
            'categories' => $this->name ? Category::whereLike('name', $this->name)->take(6)->get() : collect([$this->category->parent])->filter(fn(?Category $category) => $category)
        ]);
    }

    public function associate($categoryId)
    {
        $this->category->parent()->associate($categoryId)->save();
    }

    public function dissociate()
    {
        $this->category->parent()->dissociate()->save();
    }
}
