<?php

namespace App\Http\Livewire;

use App\Models\doctors;
use Livewire\Component;
use Twilio\Rest\Client;

class Paymentdetails extends Component
{
    public $doctor_name;
    public function mount(){
        $sid    = "AC27f495c841439025a4525743c8281720";
        $token  = "7fd02a022bbc7bab711d3db747a77cff";
        $twilio = new Client($sid, $token);
    
        $message = $twilio->messages
          ->create("whatsapp:+917339275459", // to
            array(
              "from" => "whatsapp:+14155238886",
              "body" => "Your appointment is coming up on July 21 at 3PM"
            )
          );
    }
    public function render()
    {
      $this->doctor_name = doctors::find(session('this.tab'));
      return view('livewire.paymentdetails',[
        'doctor_name' => $this->doctor_name,
      ]);
    }
}
