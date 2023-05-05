<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Feature;
use App\Models\Laptop;

use Auth;

class LaptopController extends Controller
{
    public function index(){
        $laptops = Laptop::simplepaginate(2);
        return view('/laptop',compact(['laptops']));
    }

    public function create(){
        return view('/form_laptop');
    }

    public function store(Request $request){
        $file = $request->file('gambar');
        // dd($request->file('gambar'));
        // dd($request->files);
        $name = $file->hashName();
        $file->store('photos','public');
        Laptop::create([
            'name'=>$request->name,
            'series'=>$request->series,
            'brand'=>$request->brand,
            'gambar'=>$name,
            'harga'=>$request->harga
        ]);
        return redirect('/laptop');
    }

    public function edit($id){
        $edit=Laptop::find($id);
        return view('form_laptop',compact(['edit']));
    }

    public function update(Request $request,$id)
    {
        
        // $file = $request->file('gambar');
        // $name = $file->hashName();
        // $file->store('photos','public');
        
        $laptop=Laptop::find($id);
        $laptop->name=$request->name;
        $laptop->series=$request->series;
        $laptop->brand=$request->brand;
        // $laptop->gambar=$name; tidak usah diupdate gambar
        $laptop->harga=$request->harga; 
        $laptop->save();
        return redirect('/laptop');
    }

    public function delete($id)
    {
        $laptop=Laptop::find($id);
        $laptop->delete();
        return redirect('/laptop');
    }
}
