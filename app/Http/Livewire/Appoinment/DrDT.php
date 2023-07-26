<?php

namespace App\Http\Livewire\Appoinment;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class DrDT extends Component
{

    public $startDate;
    public $endDate;
    public $currentMonth;
    public $currentDay;
    public $Date;
    public $listeners = ['booking_patient' => 'booking_doctor'];

    public function booking_doctor($doctor_id,$book_date,$book_time){
        session(['this.tab'=>$doctor_id]);
        session(['this.date'=>$book_date]);
        session(['this.time'=>$book_time]);
    
        return redirect()->to('/patient');
    }
    public function mount()
    {
        $currentDate = Carbon::now();
        $this->currentMonth = Carbon::now()->format('F');
        
        $this->Date = Carbon::now();
        // dd($this->Date);

        $this->startDate = $currentDate->copy();

        $this->endDate = $currentDate->copy()->addDays(6);
    }

    public function render()
    {
        $period = CarbonPeriod::create($this->startDate, $this->endDate);
        return view('livewire.appoinment.dr-d-t',[
            'period' => $period,
        ]);

    }
}
