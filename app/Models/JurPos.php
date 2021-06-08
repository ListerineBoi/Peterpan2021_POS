<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurPos extends Model
{
    public $timestamps = FALSE;
    protected $fillable = [
        'tgl','id_beban','id_trans','ket','debit','kredit',
    ];
    protected $table="jurnal-posting";
}
