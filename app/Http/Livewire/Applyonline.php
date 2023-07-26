<?php

namespace App\Http\Livewire;

use App\Models\doctors;
use Livewire\Component;

class Applyonline extends Component
{
    public $doctors;
    public function render()
    {   
        $this->doctors = doctors::all();
        return view('livewire.applyonline' ,[
            'doctors' => $this->doctors,

        ]);
    }
}
