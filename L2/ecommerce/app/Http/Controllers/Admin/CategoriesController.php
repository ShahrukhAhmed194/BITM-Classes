<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

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
                'name' => $request->name
            ]);
            return redirect()->back()->with('success', 'Successfully Category Created');
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong! Please try again.');
           // return redirect()->back()->with('error', $e->getMessage());
        }
      
    }
}
