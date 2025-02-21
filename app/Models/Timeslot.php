<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    protected $fillable = [
        'start_time',
        'end_time',
        'course_date',
    ];

    public function course(){
        return $this->belongsToMany(Course::class, foreignPivotKey:'course_timeSlot_id');
    }
}