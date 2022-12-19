<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use Livewire\Component;

class AdminAddBranchesComponent extends Component
{
    public $name;
    public $phone;
    public $phone2;
    public $address;
    public $whatsapp;
    public $district;
    public $box_mail;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'district' => 'required',
            'box_mail' => 'required',
        ]);
    }
    public function storeBranch(){
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'district' => 'required',
            'box_mail' => 'required',
        ]);

        $branch = new Branch();
        $branch->name = $this->name;
        $branch->phone = $this->phone;
        $branch->phone2 = $this->phone2;
        $branch->address = $this->address;
        $branch->whatsapp = $this->whatsapp;
        $branch->district = $this->district;
        $branch->box_mail = $this->box_mail;
        $branch->save();
        session()->flash('message', 'Branch has been created Successfully');
    }

    public function render()
    {
        return view('livewire.admin-add-branches-component');
    }
}