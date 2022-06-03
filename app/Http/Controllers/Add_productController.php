<?php

namespace App\Http\Controllers;

use App\Add_product;
use Illuminate\Http\Request;
class Add_productController extends Controller
{
    public function index(){
        return view('add_product');
    }
    public function store(Request $request){
        $prod=new Add_product();
        $prod->name= $request->input('name');
        $prod->email= $request->input('email');
        $prod->post= $request->input('post');
if($request->hasFile('image')){
    $file=$request->file('image');
    $extention = $file->getClientOriginalExtension();
    $filename =time().'.'.$extention;
    $file ->move('uploads/products/',$filename);
    $prod->image=$filename;
}
else{
    return $request;
    $prod->image='';
}

$prod->save();
return view('add_product')->with('add_product',$prod);

    }
    public function display(){
        $views= Add_product::all();
        return view('prod_view')->with('views',$views);
    }
    public function edit($id){
        $views= Add_product::find($id);
        return view('edit_product')-> with('views',$views);

    }
    public function update(Request $request,$id){
        $update=Add_product::find($id);

        $update->name= $request->input('name');
        $update->email= $request->input('email');
        $update->post= $request->input('post');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename =time().'.'.$extention;
            $file ->move('uploads/products/',$filename);
            $update->image=$filename;
        }
        $update->save();
        return redirect('/add_product')->with('update',$update);

    }
    public function destroy($id){
        $deleteitem= Add_product::find($id);
        $deleteitem ->delete();
        return redirect('prod_view');
    }

}
