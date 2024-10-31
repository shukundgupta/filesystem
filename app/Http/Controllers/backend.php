<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class backend extends Controller
{
    public $data;
    public function result(Request $mydata){
        print_r($mydata->file('myfile'));
    }
}
