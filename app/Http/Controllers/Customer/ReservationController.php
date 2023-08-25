<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CreateRequest;

use App\Models\Reservation;

use App\Models\Instrument;
use App\Models\Shop;
class ReservationController extends Controller
{
    public function reservationGet($instrument_id)
    {
        return view('customer.reservation-form', ['instrument_id' => $instrument_id]);
    }

    public function registerReservation(CreateRequest $request)
    {
        $reservation = new Reservation;
        $formInfo = $request->reserve();
        $reservation->instrument_id = $formInfo['instrument-id'];
        $reservation->reservation_date = $formInfo['reservation-date'];
        $reservation->user_name = $formInfo['name'];
        $reservation->phone_number = $formInfo['phone-number'];
        $reservation->comment = $formInfo['comment'];
        $reservation->save();
        $formInfo['reservation-id'] = $reservation->reservation_id;
        $reshapedInfo = $this->reshapeReservation($formInfo);
        return view('customer.reservation-view', compact('reshapedInfo'));
    }

    // public function showReservation()
    // {
    //     return view('customer.reservation-view', ['']);
    // }

    private function reshapeReservation($formInfo)
    {
        // 楽器名を取得
        // $instrument = new Instrument;
        $name = $formInfo['name'];
        $instrument = Instrument::select('instrument_name', 'shop_id')->where('instrument_id', $formInfo['instrument-id'])->first();
        $shopName = Shop::select('shop_name')->where('shop_id', $instrument['shop_id'])->first()['shop_name'];
        $reservation_id = $formInfo['reservation-id'];
        $date = $formInfo['reservation-date'];  // ->format('Y-m-d H:i');
        $instrumentName = $instrument['instrument_name'];
        $comment = $formInfo['comment'];
        $reshapedData = [
            'name' => $name,
            'shop-name' => $shopName,
            'reservation-id' => $reservation_id,
            'reservation-date' => $date,
            'instrument-name' => $instrumentName,
            'comment' => $comment
        ];
        return $reshapedData;
    }
}
