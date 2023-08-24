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
                <div class="sticky top-1/2 left-1/2 text-center p-6 bg-white border-b border-gray-200">
                <p>
                    <button type="button" class="cursor-pointer m-5 p-3 rounded-full font-semibold text-white text-base bg-blue-500 hover:bg-blue-700 ring-blue-200 ring-2 shadow-lg" onclick="location.href='admin/login'">楽器店様はこちら</button>
                </p>
                <p>
                    <button type="button" class="cursor-pointer m-5 p-3 rounded-full font-semibold text-white text-base bg-blue-500 hover:bg-blue-700 ring-blue-200 ring-2 shadow-lg" onclick="location.href='instrumentHome'">お客様はこちら</button>
                </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>