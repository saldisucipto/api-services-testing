<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashsidebar extends Component
{
    public function sectionid(String $id)
    {
        // return response(json_decode($id));
    }

    public function render()
    {
        return view('livewire.dashsidebar');
    }
}
