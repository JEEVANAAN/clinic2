<?php

namespace App\Http\Livewire\Appoinment;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class Month extends Component
{

    public $startDate;
    public $endDate;
    public $currentMonth;
    public $currentDay;
    public $Date;


    public function mount()
    {
        $currentDate = Carbon::now();
        $this->currentMonth = Carbon::now()->format('F');
        
        $this->Date = Carbon::now()->format('d');

        $this->startDate = $currentDate->copy();

        $this->endDate = $currentDate->copy()->addDays(6);
    }

    public function render()
    {
        $period = CarbonPeriod::create($this->startDate, $this->endDate);
        return view('livewire.appoinment.month',[
            'period' => $period,
        ]);

    }
}

