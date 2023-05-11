<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Product;
Use App\Models\Category;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    // public function index()
    // {
    //     // $data = Product::get();
    //     $data = Product::select('products.*', 'categories.catName')
    //     -> join('categories', 'products.catID', '=', 'categories.catID')->get();
    //     return view('index',compact('data'));
    // }

    // // /add 
    // public function add(){
    //     $category = Category::get();
    //     return view('add',compact('category'));
    // }

    // public function save(request $request)
    // {   
    //     $pro = new Product();
    //     $pro->proID = $request ->id;
    //     $pro->productname = $request->name;
    //     $pro->productprice = $request->price;
    //     $pro->productimage = $request->image;
    //     $pro->productdetail =$request->details;
    //     $pro->catID= $request ->category;
    //     $pro->save();
    //     return redirect()->back()->with('success','added successfully');
    // }

    // public function edit($id)
    // {
    //     $data = Product::where('proID', '=', $id)->first();
    //     $category = Category::get();
    //     return view('edit', compact('data','category'));
    // }

    // public function update(Request $request)
    // {
    //     Product::where('proID', '=', $request->id)->update([
    //         'productname' => $request->name,
    //         'productprice' => $request->price,
    //         'productimage' => $request->image,
    //         'productdetail' => $request->details,
    //         'catID' => $request->category
    //     ]);
    //     return redirect()->back()->with('success','Product updated successfully!');
        
    // }

    

    // public function delete($id)
    // {
    //     Product::where('proID','=',$id)->delete();
    //     return redirect()->back()->with('success','Product deleted successfully!');
    // }
    
   /*Customer*/
    public function index()
    {
        $data = Product::select('products.*', 'categories.catName')
        -> join('categories', 'products.catID', '=', 'categories.catID')->get();
        return view('customers.index',compact('data'));
    }

    public function products()
    {
        $data = Product::select('products.*', 'categories.catName')
        -> join('categories', 'products.catID', '=', 'categories.catID')->get();
        return view('customers.products',compact('data'));
    }

    public function contact()
    {
        $data = Product::select('products.*', 'categories.catName')
        -> join('categories', 'products.catID', '=', 'categories.catID')->get();
        return view('customers.contact',compact('data'));
        
    }

    public function productsdetail()
    {
        $data = Product::select('products.*', 'categories.catName')
        -> join('categories', 'products.catID', '=', 'categories.catID')->get();
        return view('customers.productsdetail',compact('data'));
    }

    public function checkout()
    {
        $data = Product::select('products.*', 'categories.catName')
        -> join('categories', 'products.catID', '=', 'categories.catID')->get();
        return view('customers.checkout',compact('data'));
        
    }


    /*Admin*/
    public function productsAdmin()
    {
        $data = Product::select('products.*', 'categories.catName')
        -> join('categories', 'products.catID', '=', 'categories.catID')->get();
        return view('admin.products',compact('data'));
    }

    public function add(){
        $category = Category::get();
        return view('admin.add',compact('category'));
    }

    public function save(request $request)
    {   
        $pro = new Product();
        $pro->proID = $request ->id;
        $pro->productname = $request->name;
        $pro->productprice = $request->price;
        $pro->productimage = $request->image;
        $pro->productdetail =$request->details;
        $pro->catID= $request ->category;
        $pro->save();
        return redirect()->back()->with('success','added successfully');
    }

    public function edit($id)
    {
        $data = Product::where('proID', '=', $id)->first();
        $category = Category::get();
        return view('admin.edit', compact('data','category'));
    }

    public function update(Request $request)
    {
        Product::where('proID', '=', $request->id)->update([
            'productname' => $request->name,
            'productprice' => $request->price,
            'productimage' => $request->image,
            'productdetail' => $request->details,
            'catID' => $request->category
        ]);
        return redirect()->back()->with('success','Product updated successfully!');
    }

    public function delete($id)
    {
        Product::where('proID','=',$id)->delete();
        return redirect()->back()->with('success','Product deleted successfully!');
    }



    
    
}