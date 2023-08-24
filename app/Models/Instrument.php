<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;

    //テーブル名
    protected $table = 'instruments';
    protected $primaryKey = 'instrument_id';

    public $timestamps = false;
    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id'); // 外部キーの指定が正しくなるように修正
    }

}
