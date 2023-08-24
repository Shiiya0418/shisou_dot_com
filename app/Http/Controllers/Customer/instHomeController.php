<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Instrument;
use App\Models\Shop;
use Illuminate\Support\Facades\Log;

class instHomeController extends Controller
{
    /**
     * 楽器一覧を表示する
     * 
     * @return \Illuminate\View\view
     */

    public function showList()
    {
        $instruments = Instrument::all();
        // dd($Instruments);
        return view('Instrument.list',['instruments' => $instruments]);
    }
    public function index()
    {
        $instruments = Instrument::with('shop')->get();

        return view('instruments.index', compact('instruments'));
    }

    /**
     * 楽器詳細を表示する
     * @param int $instrument_id
     * @return \Illuminate\View\View
     */

    public function showDetail($instrument_id)
    {
          //      dd("OK");

        $instrument = Instrument::find($instrument_id);

        // if(is_null($instrument)){
        //     \Session::flash('err_msg','データがありません。');
        //     return redirect(route('InstHome'));
        // }
        return view('Instrument.detail',['instrument' => $instrument]);
    }
}
