<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public function render()
    {
        $categories = Category::get();
        $services = Service::inRandomOrder()->paginate(12);
        return view('livewire.services-component',['categories' => $categories, 'services' => $services]);
    }
}