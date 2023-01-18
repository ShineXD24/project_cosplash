<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('partial.navbar',[
            "data_cosplash" => Item::all()
        ]);
    }
}
