<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beban extends Model
{
    public $timestamps = FALSE;
    protected $fillable = [
        'id_user', 'ket','jum','created_at',
    ];
    protected $table="beban";
}
