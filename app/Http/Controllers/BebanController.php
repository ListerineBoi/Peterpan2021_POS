<?php

namespace App\Http\Controllers;
use auth;
use Illuminate\Http\Request;
use App\Models\Beban;
class BebanController extends Controller
{
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
       $beban=Beban::all();
        return view('beban',compact('beban'));
    }
    public function beban(Request $request)
    {
        $this->validate($request, [
            'ket' => 'required',
            'jum' => 'required',    
        ]);
        $Beban= new Beban([
            'id_user' => Auth::user()->id,
            'ket' => $request->ket,
            'jum' => $request->jum,
            'created_at' => date("Y-m-d")
            
        ]);
        $Beban->save();
        return redirect()->route('beban');
    }
}
