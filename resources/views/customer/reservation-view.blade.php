<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            試奏予約確認画面
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>予約完了!</h2>
                    <div class="flex justify-center">
                        おなまえ: {{ $reshapedInfo['name'] }}<br><br>
                        店舗情報: {{ $reshapedInfo['shop-name'] }}<br><br>
                        予約番号: {{ $reshapedInfo['reservation-id'] }}<br><br>
                        予約日時: {{ $reshapedInfo['reservation-date'] }}<br><br>
                        予約楽器: {{ $reshapedInfo['instrument-name'] }}<br><br>
                        要望等　:<br>
                        　　　　{{ $reshapedInfo['comment'] }}<br><br>
                    </div>
                    <a href="/instrumentHome">予約画面へ</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>