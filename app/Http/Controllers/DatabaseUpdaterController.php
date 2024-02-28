<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabaseUpdaterController extends Controller
{
    public function trigger()
    {
        $this->updatePageOptionsDatabase();
    }
    public function updatePageOptionsDatabase(){
        
    }
}
