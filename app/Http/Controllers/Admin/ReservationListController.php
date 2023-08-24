<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Instrument;

class ReservationListController extends Controller
{
    public function showReservationList()
    {
        $reservations = Reservation::all();

        $reservationsArray = [];
        foreach ($reservations as $reservation)
        {
            $instrumentName = $reservation->instrument->instrument_name;
            $reservationsArray[] = [
                'reservation_id' => $reservation->reservation_id,
                'reservation_date' => $reservation->reservation_date,
                'user_name' => $reservation->user_name,
                'instrument_name' => $instrumentName,
                'phone_number' => $reservation->phone_number,
                'comment' => $reservation->comment
            ];
        }
        return view('admin.reservation-list', ['reservations' => $reservationsArray]);
    }
}