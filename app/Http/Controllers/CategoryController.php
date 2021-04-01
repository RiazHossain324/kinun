<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
        ]);

        if ($validator->fails()) :
            return response()->json(['status' => 2, 'errors' => $validator->errors()]);
        else :
            $data = Categorie::create([
                'category' => $request->category
            ]);

            if ($data) :
                return response()->json(['status' => 1, 'text' => 'Category added successfully']);
            else :
                return response()->json(['status' => 0, 'text' => 'Category add failed.']);
            endif;
        endif;
    }

    public function show(){
        $data = Categorie::all();
        return view('admin.category.category', ['categorys' => $data]);
    }

    public function homecategory(){

    }



}
