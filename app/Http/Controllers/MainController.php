<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    //
    public function showPage():View
    {
        //as liguas que cada pessoa fala
        $data = [
            'João' => ['Português', 'Iinglês'],
            'Maria' => ['Português', 'Espanhol'],
            'Ana' => ['Português', 'Inglês', 'Francês']
        ];
        return view('home',['pessoas_linguas' => $data]);
    }
}
