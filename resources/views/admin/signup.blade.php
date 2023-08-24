<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            登録済み楽器店確認画面
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>登録完了!</h2>
                    <div class="justify-center">
                        店舗ID　　　: {{ $shop_id }}<br><br>
                        店舗名  　　: {{ $shop_name }}<br><br>
                        店舗住所  　: {{ $shop_address }}<br><br>
                    </div>
                    <a href="/admin/login">管理者トップ画面へ</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>