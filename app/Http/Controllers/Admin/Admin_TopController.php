<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class Admin_TopController extends Controller
{
    public function show() {
        return view('admin_top');
    }

    public function process(Request $request)
    {
        $inputNumber = $request->input('input_number');
        $targetUrl = '/admin/top/' . $inputNumber; // 指定のURLに数字を追加
        return redirect($targetUrl);
    }
}

