<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Timeslot extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_time',
        'end_time',
    ];


    public function reservation(): BelongsToMany {
        return $this->belongsToMany(Reservation::class);
    }
}