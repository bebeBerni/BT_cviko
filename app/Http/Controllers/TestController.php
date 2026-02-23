<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction(){
        return "Funguje to?";
    }

    public function testAction2()
    {
        return "Funguje to?";
    }
}
