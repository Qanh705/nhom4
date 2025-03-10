<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
class AddController extends Controller
{
    function add(){
        return view("add.the_loai_1");
    }
    function save(Request $request)
    {
        $id=$request->input("id");
        $ten=$request->input("ten_the_loai");
        // Lưu vào database
        Category::create([
            'id' => $id, // Lưu cả ID nhập từ form
            'ten_the_loai' => $ten,
        ]);
    }
    function add2(){
        return view("add.the_loai_2");
    }
}