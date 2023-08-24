<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Instrument;
use App\Models\Shop;

class ReservationListController extends Controller
{
    public function showReservationList($shop_id)
    {
        $reservations = Reservation::all()->sortBy('reservation_date');
        $reservationsArray = [];
        foreach ($reservations as $reservation)
        {
            // dd(Shop::select('shop_id')->where('shop_id', $reservation->instrument->shop_id)->first());
            if (Shop::select('shop_id')->where('shop_id', $reservation->instrument->shop_id)->first()['shop_id'] != $shop_id)
            {
                // echo Shop::select('shop_id')->where('shop_id', $reservation->instrument->shop_id)->first();
                continue;
            }
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