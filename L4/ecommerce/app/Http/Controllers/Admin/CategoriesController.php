<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index(){

         $categories = Category::all();
         return view('admin.categories.index', compact('categories'));


        //  $categories = Category::all()->toArray();
        //  echo "</pre>";
        //  print_r($categories);
        //  echo "</pre>";

        //  foreach($categories as $info){
        //      //objform
        //      echo"Name: {info->name}"."<br>";
        //      echo"Slug: {info->slug}";
        //     // arrayform
        //      echo"Name: "{info['name']};
        //      echo"Slug: "{info['slug']};
        //  }
        
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required|'
        ]);
        
        try{
            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                // 'slug' => strtolower(str_replace(' ','_',$request->name))
            ]);
            return redirect()->back()->with('success', 'Successfully Category Created');
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong! Please try again.');
           // return redirect()->back()->with('error', $e->getMessage());
        }
      
    }

    public function edit(int $id){
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));

        // $category = Category::find($id)->toArray();
        // print_r($category);
        // exit();
    }

    public function update(Request $request, $id){
     $request->validate([
            'name'=> 'required|'
      ]);
      try{
       $category = Category::find($id);
       $category->name = $request->name;
       $category->slug = Str::slug($request->name);
     //    $category->slug = strtolower(str_replace(' ','_',$request->name));
       $category->update();

       return redirect()->back()->with('success', 'Category Updated Successfully.');
     
       }catch(\Exception $e){

        \Log::error($e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong! Please try again.');
       
      }
    }

    public function delete($id){
        try{

        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Item Successfully Deleted.');

        }catch(\Exception $e){

            \Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong! Please try again.');
        }
    }
}

