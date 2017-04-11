<?php

namespace App\Controllers;

use App\Core\App;

class LeadsController
{
    public function index()
    {
        $leads = App::get('database')->getAll('leads' , 'Lead');
        return view('index' , compact('leads'));
    }
}