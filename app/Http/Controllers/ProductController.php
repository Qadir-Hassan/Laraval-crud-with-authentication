<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use function Ramsey\Uuid\v1;

class ProductController extends Controller
{
    //
    public function index()
    {
        return  view('products.index');
    }

    public function create()
    {
        return  view('products.create');
    }

    public function store(Request $request)
    {
        // Upload image

        $validateData = $request->validate(
            [

                'producttitle' => 'required',
                'productdescription' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            // [
            //     'producttitle.required' => 'Product Name is required.',
            //     'productdescription.required' => 'Product Description is required.',
            //     'image.required' => 'Image is required.'
            // ]

        );
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        //dd($request->all());

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->producttitle;
        $product->description = $request->productdescription;

        $product->save();

        return back()->withSuccess("New Product added to database with product id= " . " " . $product->id);
    }

    // Show all produts
    public function showAllProducts()
    {

        //$product = Product::get();
        // dd($product->all());
        return view('products.show', ['products' => Product::latest()->paginate(5)]);
    }


    //Edit Product
    public function editProduct($id)
    {
        $product = Product::where('id', $id)->first();
        return view('products.edit', ['product' => $product]);
        dd($product);
    }

    //update
    public function update(Request $request, $id)
    {
        // Upload image

        $validateData = $request->validate(
            [

                'producttitle' => 'required',
                'productdescription' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]   );
                $product = Product::where('id', $id)->first();
            if(isset($request->image)){

                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('products'), $imageName);
                $product->image = $imageName;
            }
     

        //dd($request->all());

        
     
        $product->name = $request->producttitle;
        $product->description = $request->productdescription;

        $product->save();

        return back()->withSuccess("Product Updated Successfully!!");
    }


    public function deleteProduct($id){
        $del = Product::where('id',$id)->first();
        $del->delete();
        return back()->withSuccess("Product Deleted Successfully!!");

    }


    public function viewProduct($id){
        $product = Product::where('id',$id)->first();
        return view('products.view',['product'=>$product]);
        //return  view('products.index');
        
        
    }
}
