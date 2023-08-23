<x-app-layout>
<!-- @extends('layout')
@section('title', 'ブログ一覧')
@section('content') -->

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <h2>楽器一覧</h2>
                <table class="table table-striped">
                    <tr>
                        <th width="30%">画像</th>
                        <th width="60%">詳細</th>

                    </tr>
                    @foreach($instruments as $instrument)
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
            </div>
        </div>
    </div>
    <footer class="footer bg-dark  fixed-bottom">

    </footer>
</body>
</html>
</x-app-layout>