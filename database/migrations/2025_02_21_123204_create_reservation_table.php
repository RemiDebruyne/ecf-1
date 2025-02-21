<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('reservation_date');
            $table->foreignIdFor(App\Models\Course::class, 'course_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(App\Models\Client::class, 'client_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(App\Models\Timeslot::class, 'timeslot_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
