<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceDetailsComponent extends Component
{
    use WithPagination;
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $service = Service::where('slug', $this->slug)->first();
        $categories = Category::get();
        $setting = Setting::find(1);
        $related_services = Service::where('category_id', $service->category_id)->inRandomOrder()->limit(8)->get();
        $popular_services = Service::inRandomOrder()->limit(8)->get();
        return view('livewire.service-details-component',['service' => $service, 'setting' => $setting, 'categories' => $categories ,'related_services' => $related_services, 'popular_services' => $popular_services]);
    }
}