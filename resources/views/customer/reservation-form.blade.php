<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            試奏予約フォーム
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>試奏開始日</h2><br>
                        <div class="flex justify-center">
                            <form action="{{ route('customer.reservation') }}" method="post">
                                @csrf
                                日時　　: <input type="datetime-local" name="reservation-date"><br><br>
                                名前　　: <input type="text" name="name"><br><br>
                                電話番号: <input type="tel" name="phone-number"><br><br>
                                要望等　: <textarea id="customer-reservation-content" type="text" name="comment"
                                placeholoder="入力してください"></textarea><br><br>
                                <button class="shadow-lg bg-black shadow-black/50 text-white rounded px-2 py-1" type="submit">予約</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>