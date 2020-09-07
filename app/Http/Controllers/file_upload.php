<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class file_upload extends Controller
{
    function upload(Request $req){
   echo $req->file('image')->store('public/img');  
    }
}
