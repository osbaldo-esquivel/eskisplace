<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosoyDosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('posoy_dos');
    }
}
