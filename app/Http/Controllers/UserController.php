<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function logIn(Request $req){
        // return $req;

        echo 'Request method is '.$req->method();
        echo '<br><br>';

        echo 'Request Url is '.$req->path();
        echo '<br><br>';

        echo 'Name is '.$req->input('username');
        echo '<br><br>';

        echo 'Name is '.$req->username;
        echo '<br><br>';
        echo '<pre>';
        print_r($req->input());
        echo '<pre>';
        echo '<pre>';
        print_r($req->collect());
        echo '<pre>';
       
        echo '<br><br>';
        if($req->isMethod('post')){
            echo 'execute code for post request';
        }else{
            echo 'execute code for other request'; 
        }
        echo '<br><br>';
        if($req->is('user')){
            echo 'execute code for user path';
        }else{
            echo 'execute code for other path'; 
        }
        echo '<br><br>';
        echo 'Request IP is '.$req->ip();
    }
}
