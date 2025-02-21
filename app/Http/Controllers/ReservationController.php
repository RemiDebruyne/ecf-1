<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Client;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Client $client)
    {
        $reservations = Reservation::where('client_id', '=', $client->id);

        return view('reservation.show', ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'timeslot' => 'required',
        ]);

        Reservation::create([
            'timeslot_id' => request('timeslot->id'),
            'reservation_date' => request('reservation_date'),
            'course_id' => request('course_id'),
            'client_id' => request('client_id')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        // return view('reservation.edit', [ 'reservation' => $reservation ]  );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        request()->validate([
            'timeslot' => 'required',
        ]);

        Course::create([
            'timeslot_id' => request('timeslot->id'),
            'reservation_date' => request('reservation_date'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect('/');
    }
}
