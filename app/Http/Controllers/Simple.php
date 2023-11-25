<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Simple extends Controller
{
    public function index()
    {
        $fakeData = [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'johndoe@example.com'
        ];
    
        return response() ->json($fakeData);    
    }
}