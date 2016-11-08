<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    public function index(){
        $name = array('A','B');
        return view('product.index',[
            'name' => $name
        ]);
    }
}
