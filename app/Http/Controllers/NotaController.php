<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\Detail;

class NotaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transaksi=transaksi::where('status','=','0')->paginate(10);
        return view('nota',compact('transaksi'));
    }
    public function detail(Request $request)
    {
        $detail=Detail::where('kode_trans','=',$request->id)->paginate(10);
        $id=$request->id;
        $sum=Detail::where('kode_trans','=',$request->id)->get()->sum('harga_tot');
        return view('detail',compact('detail','sum','id'));
    }
    public function bayar(Request $request)
    {
        transaksi::where('id_trans', $request->get('id'))->update(['status' => 1]);
        return redirect()->route('nota');
    }

    public function lunas(Request $request)
    {
        $transaksi=transaksi::where('status','=','1')->paginate(10);
        return view('notaL',compact('transaksi'));
    }
    public function detailL(Request $request)
    {
        $detail=Detail::where('kode_trans','=',$request->id)->paginate(10);
        $sum=Detail::where('kode_trans','=',$request->id)->get()->sum('harga_tot');
        return view('detailL',compact('detail','sum'));
    }
}
