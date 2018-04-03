<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Retorna a view para página inicial.
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) 
    {
        return view('pages.home', [
            'title' => 'Home Page',
        ]);
    }

}
