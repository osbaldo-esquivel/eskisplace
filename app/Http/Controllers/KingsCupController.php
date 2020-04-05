<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KingsCupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('kings_cup', [
            'start' => 'back',
        ]);
    }
}
