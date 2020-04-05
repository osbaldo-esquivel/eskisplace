<?php namespace App\Http\Controllers;

use App\Cards;
use Illuminate\Http\Request;

class KingsCupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $cards = new Cards();

        $shuffled_cards = $cards->createShuffledDeck();

        dd($shuffled_cards);
        return view('kings_cup', [
            'start' => 'back',
        ]);
    }
}
