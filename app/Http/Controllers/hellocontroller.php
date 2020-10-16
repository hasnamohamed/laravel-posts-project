<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller
{
    public function helloAction(){
        return view('hello', ['name' => 'Ahmed','age'=> '22', 'books'=>[
            'Comed',
            'Traj',
            'Action']
        ]);

}
}
