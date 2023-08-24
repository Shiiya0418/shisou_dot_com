<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'shops';
    protected $primaryKey = 'shop_id';
    public $timestamps = false;

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
    // リレーションを正しく設定
    public function instruments()
    {
        return $this->hasMany(Instrument::class, 'shop_id'); // 外部キーの指定が正しくなるように修正
    }
}
