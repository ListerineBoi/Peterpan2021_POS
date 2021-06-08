<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    public $timestamps = FALSE;
    protected $fillable = [
        'id_trans','id_user', 'status','no_meja','created_at'
    ];
    protected $table="transaksi";
   
}
