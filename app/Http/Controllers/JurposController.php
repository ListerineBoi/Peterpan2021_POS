<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\transaksi;
use App\Models\jurpos;
use App\Models\Beban;
use Illuminate\Support\Facades\Schema;

class JurposController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function jurnal()
    {

    $jur=jurpos::orderBy('tgl', 'asc')->get();
    return view('jurnal',compact('jur'));
    }
    public function posting()
    {
        $kas=jurpos::where('ket','=','Kas')->orderBy('tgl', 'asc')->get();
        $penj=jurpos::where('ket','=','Penjualan')->orderBy('tgl', 'asc')->get();
        $Beban=jurpos::where('ket','LIKE', 'Beban%')->orderBy('tgl', 'asc')->get();
        //return $Beban;
        return view('posting',compact('kas','penj','Beban'));
    }
    public function labarugi()
    {
        $Beban=Beban::all();
        return view('labarugi',compact('Beban'));
    }

    public function proses()
    {
        Schema::disableForeignKeyConstraints();
        jurpos::truncate();
        Schema::enableForeignKeyConstraints();
       $transaksi=transaksi::all();
       foreach($transaksi as $row){
        $kas= new jurpos([
            'tgl' => $row['created_at'],
            'id_trans' => $row['id_trans'],
            'ket' => 'Kas',
            'debit' =>  Detail::where('kode_trans','=',$row['id_trans'])->get()->sum('harga_tot')
        ]);
        $kas->save();
        $penj= new jurpos([
            'tgl' => $row['created_at'],
            'id_trans' => $row['id_trans'],
            'ket' =>  'Penjualan',
            'kredit' =>  Detail::where('kode_trans','=',$row['id_trans'])->get()->sum('harga_tot')
        ]);
        $penj->save();
       }
       
       $Beban=Beban::all();
       foreach($Beban as $row){
        $bebn= new jurpos([
            'tgl' => $row['created_at'],
            'id_beban' => $row['id_beban'],
            'ket' =>  $row['ket'],
            'debit' =>  $row['jum']
        ]);
        $bebn->save(); 
        $kasb= new jurpos([
            'tgl' => $row['created_at'],
            'id_beban' => $row['id_beban'],
            'ket' => 'Kas',
            'kredit' =>  $row['jum']
            ]);
            $kasb->save();
       }
       return redirect()->route('jurnal');
    }
}
