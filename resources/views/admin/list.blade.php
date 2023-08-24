<x-app-layout>
@extends('layout')
@section('title', '楽器一覧')
@section('content')

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                @php
                $shop_id = request('input_data');
                $shop = App\Models\Shop::find($shop_id);
                @endphp

                @if ($shop)
                    <h2 class="text-2xl font-bold mb-4">店名：{{ $shop->shop_name }}</h2>
                    <div class="mb-4">
                        <a href="/admin/instrument/{{ $shop_id }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">楽器追加</a>
                        <a href="/admin/reservation/{{ $shop_id }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-green-600">予約一覧</a>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">登録楽器一覧</h3>


                <table class="table table-striped" width = "90%">
                    <tr>
                        <th width="30%">画像</th>
                        <th width="60%">詳細</th>

                    </tr>
                    @foreach($shop->instruments as $instrument)
                    <tr>
                        <td><img src="{{asset( $instrument->image_path  )}}"alt="" height = "100"></td>
                        <td>
                            <table class="table table-striped">
                                <tr>
                                <td>楽器名：<a href="/InstrumentHome/{{ $instrument->instrument_id }}">{{ $instrument->instrument_name  }}</a></td>
                                <tr><td>値段：{{ $instrument->price  }}円</td></tr>
                                <tr><td>カテゴリー：{{ $instrument->instrument_category  }}</td></tr>
                                <tr><td>ギタータイプ：{{ $instrument->instrument_type  }}</td></tr>
                                <tr><td>店名：{{ $instrument->shop->shop_name  }}</td></tr>
                                </tr>
                            </table>
                        @csrf
                    </tr>
                    @endforeach
                </table>
                @else
                <p>該当のショップが存在しません。</p>
            @endif
            </div>
        </div>
    </div>

    <footer class="footer bg-dark  fixed-bottom">

    </footer>
</body>
</html>
</x-app-layout>