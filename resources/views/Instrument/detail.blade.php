<x-app-layout>
@extends('layout')
@section('title', 'ブログ詳細')
@section('content') 
    

    @php
        $image_data = imagecreatefromstring(file_get_contents( $instrument->image_path));
        $width = imagesx($image_data);
        $height = imagesy($image_data);
    @endphp

    @if ($width <= $height)
        <div class="bg-white dark:bg-gray-800 overflow-hidden relative">
            <div class="text-start w-1/2 py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                    <span class="block">
                        {{$instrument->instrument_name}}
                    </span>
                    <span class="block text-indigo-500 text-right">
                    値段：{{ $instrument->price  }}円
                    </span>
                    <br></br>
                    <h3 class="block text-indigo-500 text-left ml-5">
                    楽器種：{{ $instrument->instrument_category  }}
                    </h3>
                    <h4 class="block text-indigo-500 text-left ml-5">
                    タイプ：{{ $instrument->instrument_type  }}
                    </h4>
                    <h4 class="block text-indigo-500 text-left ml-5">
                    店名：{{ $instrument->shop->shop_name  }}
                    </h4>
                </h2>
                    <div class="lg:mt-0 lg:flex-shrink-0">
                        <div class="mt-12 inline-flex rounded-md shadow">
                            <button type="button" button onclick="location.href='/customer/reservation/{{ $instrument->instrument_id}}'" class="py-4 px-6  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                予約する
                            </button>
                        </div>
                    </div>
                </div>
            <img src="{{asset( $instrument->image_path  )}}" class="absolute top-0 right-0 h-full max-w-1/2 lg:block"/>
        </div>
    @else

    <div class="bg-white dark:bg-gray-8000 overflow-hidden relative">
        <div class="text-start py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20 flex flex-col justify-between h-full">
            <div class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl flex flex-col items-center"> <!-- flex コンテナを使用してテキストを中央配置 -->
                <span class="block mb-2">
                    {{$instrument->instrument_name}}
                </span>
                <span class="block mb-2">
                    <img src="{{ asset($instrument->image_path) }}" class="max-w-1/2 lg:block mx-auto">
                </span>
                <span class="block text-indigo-500 text-right">
                    値段：{{ $instrument->price  }}円
                </span>
                <span class="block text-indigo-500 text-center">
                    楽器種：{{ $instrument->instrument_category  }}
                </span>
                <span class="block text-indigo-500 text-center">
                    タイプ：{{ $instrument->instrument_type  }}
                </span>
                <span class="block text-indigo-500 text-center">
                    店名：{{ $instrument->shop->shop_name  }}
                </span>
                <button type="button" onclick="location.href='/customer/reservation/{{ $instrument->instrument_id}}'" class="mt-4 py-4 px-6 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                    予約する
                </button>
            </div>
        </div>
    </div>
    
    
    
    

    @endif
  



<br>
    <div class="container text-center">
        <div class="row">
            <div class="pt-20">
                <h1>{{$instrument->instrument_name}}</h1>
                <img src="{{asset( $instrument->image_path  )}}"alt="" height = "100" style="display: block; margin: auto;">
                <h3>値段：{{ $instrument->price  }}円</h3>
                <h3>カテゴリー：{{ $instrument->instrument_category  }}</h3>
                <h3>ギタータイプ：{{ $instrument->instrument_type  }}</h3>
                <h3>フレット数：{{ $instrument->fret  }}</h3>
                <h3>ピックアップ数：{{ $instrument->pickup  }}</h3>
                <h3>その他：{{ $instrument->comment  }}</h3>
                <h3>店名：{{ $instrument->shop->shop_name  }}</h3>
            </div>
        </div>
    </div>

    <footer class="footer bg-dark  fixed-bottom">

    </footer>
</body>
</html>
</x-app-layout>