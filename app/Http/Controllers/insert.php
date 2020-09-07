<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user_data;

class insert extends Controller
{
    function upload(Request $req){
        $user_data=new user_data;
        $user_data->name=$req->name;
        $user_data->age=$req->age;
        echo $user_data->save();
        
    }
    function update(Request $req){
        $data=user_data::where('name',$req->name)->update(['age'=>$req->age]);
        echo $data;
    }
    function delete(Request $req){
        $data=user_data::find($req->id);
        $data->delete();
    }
}
?>