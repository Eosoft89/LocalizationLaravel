<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $msg = __('welcome.message');
        $greetings =__('welcome.greetings', ['name' => 'Eric']); //Para pasar el valor a una variable definida en archivos lang
        return view('example', compact('msg', 'greetings'));
    }

}
