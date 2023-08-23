<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Instrument;
use App\Models\Shop;

class instHomeController extends Controller
{
    /**
     * 楽器一覧を表示する
     * 
    //  * @return view
     */

    public function showList()
    {
        $Instruments = Instrument::all();
        $Shops = Shop::all();
        // dd($Instruments);
        return view('Instrument.list',['instruments' => $Instruments]);
    }
    public function index()
    {
        $instruments = Instrument::with('shop')->get();

        return view('instruments.index', compact('instruments'));
    }
}
