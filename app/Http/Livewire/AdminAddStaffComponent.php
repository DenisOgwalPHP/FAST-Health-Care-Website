<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use Livewire\Component;
use Carbon\Carbon;

class AdminAddStaffComponent extends Component
{
    public $name;
    public $position;
    public $branch;
    public $image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'position' => 'required',
            'branch' => 'required',
            'image' => 'required',
        ]);
    }
    public function storeStaff(){
        $this->validate([
            'name' => 'required',
            'position' => 'required',
            'branch' => 'required',
            'image' => 'required',
        ]);

        $staff = new Staff();
        $staff->name = $this->name;
        $staff->position = $this->position;
        $staff->branch = $this->branch;
        $imageName = Carbon::now()->timestamp. '.'. $this->image->extension();
        $this->image->storeAs('staffs',$imageName );
        $staff->image = $imageName;
        $staff->save();
        session()->flash('message', 'Staff has been created Successfully');
    }

    public function render()
    {
        return view('livewire.admin-add-staff-component');
    }
}