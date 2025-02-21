<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = [
        'activity',
        'duration'
    ];

    public function reservation(): HasMany {
        return $this->hasMany(Client::class);
    }
}
