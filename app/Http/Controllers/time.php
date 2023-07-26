<?php

namespace App\Http\Controllers;

use App\Models\consultations;
use Illuminate\Http\Request;

class time extends Controller
{
    public function cash($doctor,$date){
        $cash =consultations::
        where('doctor_id','=',$doctor)->
        where('consultation_date','=',$date)->get();
        return response()->json($cash);
      }
}
