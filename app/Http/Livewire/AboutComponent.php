<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $staffs = Staff::get();
        return view('livewire.about-component', ['staffs' => $staffs]);
    }
}