<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InstrumentRequest;
use App\Models\Instrument;

class RegisterInstrumentController extends Controller
{
    public function instrumentForm()
    {
        return view('admin.instrument-form', []);
    }

    public function registerInstrument(InstrumentRequest $request)
    {
        $instrument = new Instrument;
        $formInfo = $request->getInstrument();
        $imagePath = $request->file('image')->store('public/img');
        $formInfo['image-path'] = 'img/'.basename($imagePath);
        $instrument->shop_id = 1;
        $instrument->instrument_name = $formInfo['instrument-name'];
        $instrument->price = $formInfo['price'];
        $instrument->instrument_category = $formInfo['category'];
        $instrument->instrument_type = $formInfo['type'];
        $instrument->fret = $formInfo['fret'];
        $instrument->pickups = $formInfo['pickups'];
        $instrument->comment = $formInfo['comment'];
        $instrument->image_path = 'storage/'.$formInfo['image-path'];
        $instrument->save();
        $formInfo['instrument-id'] = $instrument->instrument_id;
        return view('admin.instrument-view', compact('formInfo'));
    }

    public function showInstrument()
    {

    }
}