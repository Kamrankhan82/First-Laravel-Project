<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registration extends Controller
{
    public function reg(Request $req){
        if($req->input('submit')=='submit')
        {    
          if($req->validate([
                'id'=>'required',
                'name'=>'required',
                'password'=>'required'
                              ]))
          {
          $user=DB::table('user_data')->insert([
              'user_id'=>$req->input('id'),
              'name'=>$req->input('name'),
              'password'=>$req->input('password')
              ]);
          }
          if($user==1){
              return redirect('/users');
          }else{
              echo "<center><h3>Registration Unsuccessful</h3></center>";
          }
        }
        else{
            return view('/registration');
        }
}
}