<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $primaryKey = 'reservation_id';

    public $timestamps = false;

    public function instrument()
    {
        return $this->belongsTo(Instrument::class, 'instrument_id', 'instrument_id');
    }
}
