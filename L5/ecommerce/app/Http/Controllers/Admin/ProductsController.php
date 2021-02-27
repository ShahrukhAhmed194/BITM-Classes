<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
   
    public function index()
    {
        $products = Product::all();
        // $products = DB::table('products')->
        // where('deleted_at',null)->get(); //(with soft deleted data)
       return view('admin.products.index', compact('products'));
    }

   
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

   
    public function store(Request $request)
    {
        $request->validate(
            ['name'=>'required', 'category_id'=>'required']
        );

       try{
            // -------image Upload Code----------
                $imageNameWithPath = "";
           if($request->hasFile('image')){

               $extension = $request->file('image')->getClientOriginalExtension();
               $imageName = $request->name.'.'.$extension;
            //    $uploadPath = 'public/products';
               
               $upload = $request->file('image')->storeAs('public/products', $imageName);
               $imageNameWithPath = 'products/'.$imageName;
            }    


           Product::create([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $imageNameWithPath ,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'short_description' => $request->short_description,
                'description' => $request->description
           ]);

           return redirect()->back()->with('success', 'Product Created Successfully. ');

        }catch(\Exception $e){

            \Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went Wrong.');

        }
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin.products.edit', ['categories' => $categories, 'product' => $product ]);

    }

   
    public function update(Request $request, $id)
    {
        $request->validate(
            ['name'=>'required', 'category_id'=>'required']
        );

       try{
            // -------image Upload Code----------
                $imageNameWithPath = "";
           if($request->hasFile('image')){

               $extension = $request->file('image')->getClientOriginalExtension();
               $imageName = $request->name.'.'.$extension;
            //    $uploadPath = 'public/products';
               
               $upload = $request->file('image')->storeAs('public/products', $imageName);
               $imageNameWithPath = 'products/'.$imageName;
            }    


               $product = Product::find($id);

                $product->category_id = $request->category_id;
                $product->name = $request->name;
                $product->slug = Str::slug($request->name);
                if($imageNameWithPath){
                    \Storage::delete('public/'.$product->image);
                    $product->image = $imageNameWithPath;
                }
                $product->price = $request->price;
                $product->quantity = $request->quantity;
                $product->short_description = $request->short_description;
                $product->description = $request->description;

                $product->update();
           

           return redirect()->back()->with('success', 'Product Updated Successfully. ');

        }catch(\Exception $e){

            \Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went Wrong.');

        }
    }

    
    public function delete($id)
    {
        try{
             Product::destroy($id);
            // $product = Product::find($id);
            // $product->delete();
            return redirect()->back()->with('success', 'Item Successfully Deleted.');
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went Wrong.');

        }
        
    }
}
