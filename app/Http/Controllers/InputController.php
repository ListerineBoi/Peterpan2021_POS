<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\transaksi;
use App\Models\Detail;
class InputController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public $item =array(array("id"=>"0","qty"=>1),array("id"=>"1","qty"=>2));
    
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
        $menu=Menu::all();
        $item=session()->get('item');
        $sum=0;
       
        if($item !=null){
            $tot=Arr::pluck($item, 'harga');
            foreach($tot as $rw){
                $sum=$sum+$rw;
            }   
        }
        return view('input',compact('item','menu','sum'));
    }

    public function additem(Request $request)
    {
        $request->session()->push('item',array("id_item"=>$request->id_item,"qty"=>$request->qty,"harga"=>$request->qty*$request->harga));
        return redirect()->route('input');
    }
    public function Delitem(Request $request)
    {
        $request->session()->pull('item.'.$request->id);
        return redirect()->route('input');
    }
    public function inputP(Request $request)
    {
        $item=session()->get('item');
        $this->validate($request, [
            'no_meja' => 'required',   
        ]);
        if($item!=null){
            $transaksi= new transaksi([
                'id_user' => Auth::user()->id,
                'no_meja' => $request->no_meja,
                'status' => 0,
                'created_at' => date("Y-m-d")
            ]);
            $transaksi->save();
            foreach($item as $row){
                
                $idt=transaksi::orderBy('id_trans', 'desc')->value('id_trans');
                $Detail= new Detail([
                    'kode_trans' => $idt,
                    'id_item' => $row['id_item'],
                    'qty' => $row['qty'],
                    'harga_tot' => $row['harga']
                ]);
                $Detail->save();
            }
            session()->forget('item');
        }else{
            return redirect()->route('input')->with('Forbidden','Belum Ada Item Yang Dipesan');
        }
        return redirect()->route('input');
        
    }
}
