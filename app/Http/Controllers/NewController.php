<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    public function index (){
        return 'Day la trang news';
    }
    public function pages (){
        return 'Day la trang page';
    }
    public function getName ($name){
        return "XIN CHAO ".$name;
    }

    public function getContact(){
        //Truyen tham so tu controller sang view
        $name = 'Lan Anh';
        $address = 'Hung Yen';
//        return view('home',compact('name'));
//        return view('home')->with('name', $name);
        return view('home',[
            'name'=> $name,
            'dia_chi'=> $address
        ]);

    }
}

