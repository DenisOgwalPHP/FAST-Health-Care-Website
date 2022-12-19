<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEditCategoryComponent extends Component
{
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $description;
    public $newImage;

    public function mount($category_slug){
        $this->category_slug = $category_slug;
        $category = Category::where('slug', $category_slug)->first();
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->image = $category->image;
        $this->description = $category->description;
    }
    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);
    }
    public function updateCategory(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        if ($this->newImage) {
            $imageName = Carbon::now()->timestamp. '.'. $this->newImage->extension();
            $this->newImage->storeAs('services',$imageName );
            $category->image = $imageName;
        }
        $category->description = $this->description;
        $category->save();
        session()->flash('message', 'Category has been updated successfully');
        return redirect()->route('admin.categories');
    }

    public function render()
    {
        return view('livewire.admin-edit-category-component');
    }
}