<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
class InputMenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $menu=Menu::all();
        return view('addMenu',compact('menu'));
    }
    public function create(Request $request)
    {
        
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'des' => 'required',
            'img' => 'required'      
        ]);
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'menu'.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/imageMenu', $final);

        $Menu= new Menu([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            'des' => $request->des,
            'img' => $final
            
        ]);
        $Menu->save();
        return redirect()->route('menu')->with('success','Data Added');
        
    }
}
