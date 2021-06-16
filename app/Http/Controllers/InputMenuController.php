<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
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
    public function Vedit(Request $request)
    {
        $menu=Menu::where('id_item','=',$request->get('id_item'))->get();
        return view('editMenu',compact('menu'));
        //return $menu;
    }
    public function edit(Request $request)
    {
        
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'des' => 'required'      
        ]);
            if($request->file('img')!=null){
            $fullname = $request->file('img')->getClientOriginalName();
           
            $extn =$request->file('img')->getClientOriginalExtension();
            $final= $request->nama.'menu'.'_'.time().'.'.$extn;

            $path = $request->file('img')->storeAs('public/imageMenu', $final);
            Storage::delete($request->olimg);
            $update=[
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jenis' => $request->jenis,
                'des' => $request->des,
                'img' => $final
            ];
            }else{
                $update=[
                    'nama' => $request->nama,
                    'harga' => $request->harga,
                    'jenis' => $request->jenis,
                    'des' => $request->des
                ];  
            }
       

        Menu::where('id_item', $request->get('id'))->update($update);
        return redirect()->route('menu')->with('success','Data edited');
        
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
    public function del(Request $request)
    {
        Menu::where('id_item', $request->get('id_item'))->delete();
        return redirect()->route('menu')->with('success','Data deleted');
    }
}
