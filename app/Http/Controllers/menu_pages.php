<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\menu_page;
class menu_pages extends Controller
{
    function menu_items(){
       // $data=DB::table("menu_pages")->paginate(3);
        //return view('menu_pages',['data'=>$data]);
    //    $data=menu_page::where('price','price==100')->paginate(3);
      //  return view('menu_pages',['data'=>$data]);
       $data=menu_page::all();
        //return view('menu_pages',['data'=>$data]);
    print_r($data);
    }
}
