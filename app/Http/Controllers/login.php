<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class login extends Controller
{
    public function demo(Request $req)
    {
        if($req->input('submit')=='submit'){
            if( $req->validate(["name"=>"required",
                        "password"=>"required"
        ])){
            $user=DB::table('user_data')->where(['name'=>$req->input('name')])->get();
                if(count($user)==1){
                    return view('/hello');
                }
                else{
                    echo "<center><H1>Incorrect User Name or Password</H1></center>";
                }
            }
        }else{
            return view('login');
        }
    }
}
