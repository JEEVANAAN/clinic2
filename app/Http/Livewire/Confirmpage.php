<?php

namespace App\Http\Livewire;

use App\Models\consultations;
use App\Models\doctors;
use App\Models\patients;
use Livewire\Component;

use Stripe\Stripe;
use Stripe\Checkout\Session;

class Confirmpage extends Component
{
    public $doctor_name;
    public $patients_details;
    public $consultations;
    
    public function create()
    {

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'inr',
                    'unit_amount' => 2000,
                    'product_data' => [
                        'name' => 'Stubborn Attachments',
                        'images' => ["https://i.imgur.com/EHyR2nP.png"],
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);

        return redirect()->away($checkout_session->url);
    }


    public function render()
    {
        $this->consultations = consultations::find(session('doctor_patient'));
        $this->patients_details = patients::find(session('patients_details'));
        $this->doctor_name = doctors::find(session('this.tab'));
        return view('livewire.confirmpage',[
            'doctor_name' => $this->doctor_name,
            'patients_details' => $this->patients_details,
        ]);
    }

}
