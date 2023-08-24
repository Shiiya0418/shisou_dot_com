<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            試奏予約一覧
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>試奏予約一覧!</h2>
                    <div>
                        <?php
                        foreach ($reservations as $reservation) {
                            echo "<div>";
                                // echo "{$reservation}";
                                echo "
                                    予約番号: {$reservation['reservation_id']}<br>
                                    予約日時: {$reservation['reservation_date']}<br>
                                    予約者　: {$reservation['user_name']}<br>
                                    楽器名　: {$reservation['instrument_name']}<br>
                                    電話番号: {$reservation['phone_number']}<br>
                                    要望等　: {$reservation['comment']}<br>
                                    ";
                            echo "</div><br><br>";
                        }
                        ?>
                    </div>
                    <a href="/customer/reservation">管理者トップ画面へ</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>