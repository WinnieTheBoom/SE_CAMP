<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World!";

    function _construct() //MyController
    {

    }
    function index(){
       // echo $this->myvar;
       //return view('welcome');
       $data=['val_a' => 'Hello World!'];
    $data['val_b'] = "Laravel";
    return view('myfolder.mypage',$data);
    }

    public function store(Request $reg){
        $data['myinput'] = $req->input('myinput');
        return view('myroute',$data);
    }
}
