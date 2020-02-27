<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Information extends Model
{
    protected $table = 'informations';

    public function getCreatedAtAttribute($date)    // getXXAttributeでxxを指定できる
    {
        // created_atのフォーマットの設定
        // Carbonライブラリーは日付を操作するライブラリー
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y/m/d');
    }
}
