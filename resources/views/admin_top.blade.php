<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>試奏.com</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<x-app-layout>
    <x-slot name="header">
        <h2>試奏.com</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-center p-6 bg-white border-b border-gray-200">

                    @csrf
                    <form action="http://localhost/admin/top/" method="GET" class="flex sm:items-center mb-6 flex-col sm:flex-row">
                        <div class="flex sm:items-center mb-6 flex-col sm:flex-row">
                            <label class="block sm:w-2/3 font-bold sm:text-right mb-1 pr-4" for="name">店舗ID:<span class="text-red-500"> * </span></label>
                            <input class="block w-full sm:w-2/3 bg-gray-200 py-2 px-3 text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white"
                                type="text" name="input_data" placeholder="店舗IDを入力してください。"/>
                            <div class="sticky top-1/2 left-1/2 text-center p-6 bg-white border-b border-gray-200">
                                <button class="w-[150px] cursor-pointer p-3 rounded-full font-semibold text-white text-base bg-blue-500 hover:bg-blue-700 ring-blue-200 ring-2 shadow-lg" type="submit">ログイン</button>
                            </div>
                        </div>                        
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>