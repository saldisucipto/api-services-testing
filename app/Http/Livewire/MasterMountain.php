<?php

namespace App\Http\Livewire;

use App\Models\MasterMountain as MountainsMaster;

use Livewire\Component;

class MasterMountain extends Component
{
    public $mountains;
    public $name;
    public $description;
    public $price;
    public $starts;
    public $people;
    public $selected_people;
    public $img;
    public $location;
    public $isModalOpen = 0;


    public function render()
    {
        // deklare variable
        $this->mountains = MountainsMaster::all();
        return view('livewire.master-mountain');
    }

    public function openmodal()
    {
        $this->resetCreateForm();
        $this->openModalPopOver();
        // return  dd("button Trigetred");
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm()
    {
        $this->name = '';
        $this->email = '';
        $this->mobile = '';
    }
}
