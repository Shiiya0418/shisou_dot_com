<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instrument;
use App\Models\Shop;
use Illuminate\Support\Facades\Log;

class AdminHomeController extends Controller
{
    /**
     * 楽器一覧を表示する
     * 
     * @return \Illuminate\View\view
     */

    public function adminShowList()
    {
        $instruments = Instrument::all();
        $shops = Shop::all();
        //dd($instruments);
        return view('admin.list',['instruments' => $instruments,'shops' => $shops]);
    }
    public function index()
    {
        $instruments = Instrument::with('shop')->get();

        return view('admin.index', compact('instruments'));
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
        return view('Instrument.admin_list',['instrument' => $instrument]);
        
    }
}
