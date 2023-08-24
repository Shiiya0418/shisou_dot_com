<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            楽器登録フォーム
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>登録楽器情報</h2><br>
                    <div class="flex justify-center">
                        <form action="{{ route('admin.instrument-view') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            商品名　　　　: <input type="text" name="instrument-name"><br><br>
                            価格　　　　　: <input type="text" name="price" 
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ><br><br>
                            楽器カテゴリ　:
                            <select name="category" onchange="setTypeOptions(this.value)" id="category">
                                <option disabled selected>選択してください</option>
                                <option value="エレキギター">エレキギター</option>
                                <option value="アコースティックギター">アコースティックギター</option>
                                <option value="エレキベース">エレキベース</option>
                                <option value="エフェクター">エフェクター</option>
                            </select><br><br>
                            楽器小カテゴリ:
                            <select name="type" id="type" disabled>
                                <option disabled selected>選択してください</option>
                            </select><br><br>
                            メーカー　　　: <input type="text" name="maker"><br><br>
                            ボディ材　　　: <input type="text" name="body-material"><br><br>
                            フレット数　　: 
                            <select name="fret">
                                <?php
                                for ($i=19; $i<33; $i++) {
                                    echo "<option value='{$i}'>{$i}</option>";
                                }?>
                            </select><br><br>
                            ピックアップ　: <input type="text" name="pickups"><br><br>
                            不具合等　　　: <textarea id="customer-reservation-content" type="text" name="comment"
                            placeholoder="入力してください"></textarea><br><br>
                            商品画像　　　: <input type="file" name="image" accept="image/*">
                            <button class="shadow-lg bg-black shadow-black/50 text-white rounded px-2 py-1" type="submit">登録</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const typeOptions = {
            "エレキギター": ["ストラトタイプ", "テレキャスタイプ", "レスポールタイプ", "SGタイプ", "PRSタイプ", "ジャズマスタイプ", "ジャガータイプ", "その他"],
            "アコースティックギター": ["フォークギター", "クラシックギター", "フラメンコギター", "その他"],
            "エレキベース": ["ジャズベタイプ", "プレベタイプ", "PJタイプ", "ベースよく知らん", "その他"],
            "エフェクター": ["歪み系", "揺らし系", "空間系", "プリアンプ", "ワウペダル", "ワーミー", "EQ", "その他"],
        }
        const setTypeOptions = (selectedCategory) => {
            const typeList = document.getElementById("type");
            typeList.disabled = false;
            typeList.innerHTML = "";
            const option = document.createElement("option");
            option.innerHTML = "選択してください";
            option.defaultSelected = true;
            option.disabled = true;
            typeList.appendChild(option)
            console.log(selectedCategory);
            console.log(typeOptions[selectedCategory]);
            typeOptions[selectedCategory].forEach((type, index) => {
                const option = document.createElement('option');
                option.value = type;
                option.innerHTML = type;
                typeList.appendChild(option);
            });
        }
    </script>
</x-app-layout>