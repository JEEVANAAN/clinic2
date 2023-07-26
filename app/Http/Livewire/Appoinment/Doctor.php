<?php

namespace App\Http\Livewire\Appoinment;

use Carbon\Carbon;
use Carbon\CarbonPeriod;

use App\Models\doctors;
use Livewire\Component;

class Doctor extends Component
{
    public $doctors;
    
    public $startDate;
    public $endDate;
    public $currentMonth;

    
    public function render()
    {
        $this->doctors = doctors::all();
        return view('livewire.appoinment.doctor' ,[
            'doctors' => $this->doctors,
            
        ]);
    }
}

// Get the start and end dates dynamically