<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function user (){
        $users = array(
            (object)["id"=>1, "nom"=>"Alixe", "age"=>"25 ans", "email"=>"mubfa@mkbdj.com"],
            (object)["id"=>2, "nom"=>"Amerklf", "age"=>"25 ans", "email"=>"mubfa@mkbdj.com"],
            (object)["id"=>3, "nom"=>"Alfree", "age"=>"24 ans", "email"=>"mubfa@mkbdj.com"],
            (object)["id"=>4, "nom"=>"Alerae", "age"=>"25 ans", "email"=>"mubfa@mkbdj.com"],
            (object)["id"=>5, "nom"=>"Alvexe", "age"=>"22 ans", "email"=>"mubfa@mkbdj.com"],
        );
        return view("pages.user", compact("users"));
    }
}
