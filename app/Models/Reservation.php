<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    protected $fillable = ['reservation_date'];

    public function client() : BelongsTo {
        return $this->belongsTo(Client::class);
    }

    public function course() : BelongsTo {
        return $this->belongsTo(Course::class);
    }

    public function timeslot() : HasOne {
        return $this->hasOne(Timeslot::class);
    }
}
