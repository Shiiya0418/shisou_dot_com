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
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
            <style>
                .text1 {
                    font-size: 80px;
                    font-weight: bold;
                    font-family: "游明朝体", "Yu Mincho", YuMincho, "MS P明朝", "MS PMincho", serif;
                    text-anchor: middle; /* テキストの水平中央揃え */
                    dominant-baseline: central; /* テキストの垂直中央揃え */
                }
                #circle {
                    mix-blend-mode: difference;
                }
            </style>
            <defs>
                <text id="text1">
                    SVGテキスト
                </text>
            </defs>
            
            <rect width="100%" height="100%" fill="#000"></rect>
            <use href="#text1" class="text1" x="50%" y="50%" fill="#fff" />
            <circle id="circle" cx="50%" cy="50%" r="100" fill="#fff"></circle>
        </svg>
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