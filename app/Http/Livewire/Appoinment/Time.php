<?php

namespace App\Http\Livewire\Appoinment;

use App\Models\times;
use Carbon\Carbon;
use Livewire\Component;

class Time extends Component
{
    public $currentTime;
    public $arrayOfTime;
    public $arrayOfTi;
    public $evening;
    public $arr;
    public $printtime;
    public $today;

    

    public function mount()
    {
        $this->today = Carbon::now()->format('Y-m-d');

        $this->currentTime = now()->format('h:i A');
        $starttime = '10:00'; // your start time
        $endtime = '12:30'; // End time
        $duration = '30'; // split by 30 mins
    
        $start_time = strtotime($starttime); //change to strtotime
        $end_time = strtotime($endtime); //change to strtotime
    
        $add_mins = $duration * 60;

        $arrayOfTime = [];
        $print =[];

        while ($start_time <= $end_time) // loop between time
        {
            $arrayOfTime[] = $start_time;
            $print[] = date("h:i A", $start_time);
            $start_time += $add_mins; // to check end time
        }

        $this->arrayOfTime = $arrayOfTime;
        $this->printtime = $print;

        //next

        $start = '13:00'; // your start time
        $end = '17:30'; // End time
        $dur = '30'; // split by 30 mins

        $start_ti = strtotime($start); //change to strtotime
        $end_ti = strtotime($end); //change to strtotime

        $add_mi = $dur * 60;

        $arrayOfTi = [];

        while ($start_ti <= $end_ti) // loop between time
        {
            $arrayOfTi[] = $start_ti;
            $start_ti += $add_mi; // to check end time
        }

        $this->arrayOfTi = $arrayOfTi;

        //last
        
        
        $st = '18:00'; // your start time
        $en = '22:00'; // End time
        $dur = '30'; // split by 30 mins

        $sta = strtotime($st); //change to strtotime
        $e = strtotime($en); //change to strtotime

        $ami = $dur * 60;

        $arr = [];

        while ($sta <= $e) // loop between time
        {
            $arr[] = $sta;
            $sta += $ami; // to check end time
        }

        $this->arr = $arr;
    }
    public $time_slots_available;
    public function render()
    {
        $this->time_slots_available = times::get();
        return view('livewire.appoinment.time',[
            'time_slots_available' => $this->time_slots_available,
        ]);
    }
}
