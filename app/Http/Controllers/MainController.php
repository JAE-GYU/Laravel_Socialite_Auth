<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Exception;
use Illuminate\Support\Facades\DB as DB;

class MainController extends Controller
{

    public function index() {
        return view('main');
    }
}
