<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
use Illuminate\Support\Facades\Response;
use Image;
class StoreImageController extends Controller
{
    function index(){
        $data = Images::latest()->paginate(5);
        return view('Store_image',compact('data'))
            ->with('i',(request()->input('page',1)-1)*5);

    }
    function Insert_image(Request $request){
        $request->validate([
            'prod_name' => 'required',
            'prod_image' => 'required|image|max:2048'
        ]);
        $image_file= $request->prod_image;
        $image=Image::make($image_file);
        Response::make($image->encode('jpeg'));
        $form_data=array(
            'prod_name' => $request->prod_name,
            'prod_image'  => $image
        );
        Images::create($form_data);
        return redirect()->back()->with('success','Image stored in database successfully');
    }
    function fetch_image($image_id){
        $image=Images::findOrFail($image_id);
        $image_file=Image::make($image->prod_image);
        $response=Response::make($image_file->encode('png'));
        $response->header('Content-type','image/png');
        return $response;
    }
}
