<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class AdminRegisterController extends Controller
{
    public function registerShop(Request $request) {
        $shop = new Shop;
        $shop->shop_name = $request->input('shop_name');
        $shop->shop_address = $request->input('shop_address');
        $shop->save();
        return view('admin.signup', ['shop_id' => $shop->shop_id,'shop_name' => $shop->shop_name, 'shop_address' => $shop->shop_address]);
    }

    public function process(Request $request)
    {
        $inputNumber = $request->input('input_number');
        $targetUrl = '/admin/top/' . $inputNumber; // 指定のURLに数字を追加
        return redirect($targetUrl);
    }
}
