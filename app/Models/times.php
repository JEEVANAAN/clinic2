<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class times extends Model
{
    use HasFactory;

    protected $fillable = ['slot_id', 'time'];

    public function slot(){
        return $this->belongsTo(slots::class);
    }

}
