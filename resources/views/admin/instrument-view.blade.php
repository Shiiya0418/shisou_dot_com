<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            登録済み楽器確認画面
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>登録完了!</h2>
                    <div class="justify-center">
                        ファイル名　: {{ asset('storage/'.$formInfo['image-path']) }}<br><br>
                        <img src="{{ asset('storage/'.$formInfo['image-path']) }}" alt="{{ asset('storage/'.$formInfo['image-path']) }}"><br><br>
                        楽器識別番号: {{ $formInfo['instrument-id'] }}<br><br>
                        商品名　　　: {{ $formInfo['instrument-name'] }}<br><br>
                        価格　　　　: {{ $formInfo['price'] }}<br><br>
                        カテゴリ　　: {{ $formInfo['category'] }}<br><br>
                        タイプ　　　: {{ $formInfo['type'] }}<br><br>
                        フレット数　: {{ $formInfo['fret'] }}<br><br>
                        ピックアップ: {{ $formInfo['pickups'] }}<br><br>
                        不具合等　　:<br>
                        　　　　{{ $formInfo['comment'] }}<br><br>
                    </div>
                    <a href="/admin/top/?input_data={{ $formInfo['shop-id'] }}">管理者トップ画面へ</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>