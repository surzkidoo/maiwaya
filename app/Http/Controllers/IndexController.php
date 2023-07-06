<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        $recommendeds = product::get();
        $exclusives = product::get();
        $brands = brand::get();
        return view('index',['recommendeds'=>$recommendeds,'exclusives'=>$exclusives,'brands'=>$brands]);
    }

    public function getModel(Request $request){
        $model =  $request->model;
        $products= product::where('brand_id',$model)->get();
        return response()->json($products, 200);
    }
    

    public function product(Request $request,){
        $id=$request->id;
        $product=product::where('id',$id)->first();
        $similars = product::where('brand_id',$product->brand_id)->get();
        return view('product',['product'=>$product,'similars'=>$similars]);
    }

    public function search(Request $request){
        
        return view('search');
    }

    public function viewOrder(Request $request){
        $brands = brand::all();
        $orders = order::orderBy('created_at','desc')->get();
        return view('order',['orders'=>$orders,'brands'=>$brands]);
    }

    public function addProduct(Request $request){

        $file= $request->file('image');
                    $path = $file->store('/images','public');
                    $product = new product();
                    $product->name=$request->name;
                    $product->condition=$request->condition;
                    $product->color=$request->color;
                    $product->price=$request->price;
                    $product->description=$request->description;
                    $product->brand_id=$request->brand_id;
                    $product->storage=$request->storage;
                    $product->battery=$request->battery;
                    $product->image = 'storage/'.$path;
                    $product->save();

        return response()->json(['Product added'], 200, );
    }


    

    public function searchModel(Request $request){
        $id = $request->model;
        $product = product::where('id',$id)->first();
        return redirect('product/'.$product->id);
    }

    public function order(Request $request){

        $fullname = $request->fullname;
        $address = $request->address;
        $number = $request->number;

        $order= new order;
        $order->name = $fullname;
        $order->address = $address;
        $order->phone = $number;
        $order->product_id = $request->id;
        $order->save();

        $newOrder = order::with('product')->where('id',$order->id)->first();

        return response()->json($newOrder, 200);
    }
}
