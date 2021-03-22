<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoryController extends Controller
{
    public function addCategory(Request $req)
    {
        $category = new Categorie;
        $category->category=$req->category;
        $category->save();
        return redirect()->back();
    }
    public function show(){
        $data = Categorie::all();
        return view('admin.category.category', ['categorys' => $data]);
    }

}
