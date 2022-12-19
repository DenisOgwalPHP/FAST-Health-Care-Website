<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Order;
use App\Models\Service;
use App\Models\Setting;
use Livewire\Component;

class HomeComponent extends Component
{
    public $fullname;
    public $category_id;
    public $district;
    public $mobile;
    public $message;
    public $location;

    public $thankyou;

    public function updated($fields){
        $this->validateOnly($fields, [
            'fullname' => 'required',
            'category_id' => 'required',
            'district' => 'required',
            'mobile' => 'required',
            'location' => 'required',
        ]);
    }

    public function placeOrder(){
        $this->validate([
            'fullname' => 'required',
            'category_id' => 'required',
            'district' => 'required',
            'mobile' => 'required',
            'location' => 'required',
        ]);
        // $project = Project::where('slug', $this->slug)->first();
        $order = new Order();
        $order->fullname = $this->fullname;
        $order->mobile = $this->mobile;
        $order->district = $this->district;
        $order->location = $this->location;
        $order->message = $this->message;
        $order->category_id = $this->category_id;
        $order->save();

        session()->flash('message', 'Your Application has been sent successfully');
        return redirect()->route('thankyou');
        $this->thankyou = 1;

    }

    public function render()
    {
        $categories = Category::get();
        $services = Service::inRandomOrder()->paginate(6);
        $blogs = Blog::orderBy('created_at', 'DESC')->get()->take(3);
        $setting = Setting::find(1);
        return view('livewire.home-component',['categories' => $categories, 'services' => $services, 'setting' => $setting, 'blogs' => $blogs]);
    }
}