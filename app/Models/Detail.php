<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Detail extends Model
{
    protected $fillable = [
        'kode_trans', 'id_item','qty', 'harga_tot',
    ];
    protected $table="detail_trans";
    public function getCreatedAtAttribute($value)
    {
    $date = new Carbon($value);
    return $date->format('d-m-Y');
    }
}
