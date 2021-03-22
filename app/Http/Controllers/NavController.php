<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function nav(){
        return view("index");
    }

    public function nav1(){
        return view("shop");
    }

    public function nav3(){
        return view("blog");
    }

    public function single_product(){
        return view("single_product");
    }

    public function acs(){
        return view("admin.authentication-account-settings");
    }

    public function myAccount(){
        return view("my_account");
    }

    public function category(){
        return view("admin.category.category");
    }

    public function editCategory(){
        return view("admin.category.edit_category");
    }


}
