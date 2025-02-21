<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Client extends User {
  use HasFactory;
  protected $fillable = ["birth_year"];

  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }

  public function reservation(): HasMany {
    return $this->hasMany(Reservation::class);
  }
}