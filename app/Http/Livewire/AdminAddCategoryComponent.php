<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $description;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'image' => 'required',
            'description' => 'required',
        ]);
    }
    public function storeCategory(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'image' => 'required',
            'description' => 'required',
        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.'. $this->image->extension();
        $this->image->storeAs('categories',$imageName );
        $category->image = $imageName;
        $category->description = $this->description;
        $category->save();
        session()->flash('message', 'Category has been created Successfully');
        return redirect()->route('admin.categories');
    }
    public function render()
    {
        return view('livewire.admin-add-category-component');
    }
}