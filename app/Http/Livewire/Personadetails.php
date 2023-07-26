<?php

namespace App\Http\Livewire;

use App\Models\consultations;
use App\Models\patients;
use App\Models\slots;
use App\Models\times;
use Livewire\Component;



class Personadetails extends Component
{
    public $patient;
    public $problam;
    public $form =[
        'full_name' =>'',
        'email' =>'',
        'phone_number' =>'',
    ];
    public function submit(){
        $this->validate([
            'form.full_name' => 'required',
            'form.email' => 'required|email',
            'form.phone_number' => 'required',
        ]);
      $patients_id =  patients::create($this->form);
      session(['patients_details'=>$patients_id->id]);
    //   dd($patients_id->id);
        // $patient = patients::get();
        $doctor = session('this.tab');
        $date = session('this.date');
        $time = session('this.time');
        // dd($date);
        // dd($doctor,$date,$time,$this->problam);
      $doctor_patient =  consultations::create([
            'doctor_id' => $doctor,
            'patient_id' => $patients_id->id,
            'consultation_date' => "$date",
            'consultation_time' => "$time",
            'health_concerns' => $this->problam,
        ]);
        session(['doctor_patient'=>$doctor_patient->id]);
        $slot_id = slots::create([
            'doctor_id' => $doctor,
            'date' => $date,
        ]);
        // dd($slot_id->id);
         times::create([
            'slot_id' => $slot_id->id,
            'time' => $time,
        ]);
        return redirect()->to('/confirm_details');
    }
        public function render()
    {
        return view('livewire.personadetails');
    }
}