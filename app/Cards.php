<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    public function createShuffledDeck()
    {      
        $cards = [
            '2c', '2s', '2h', '2d',
            '3c', '3s', '3h', '3d',
            '4c', '4s', '4h', '4d',
            '5c', '5s', '5h', '5d',
            '6c', '6s', '6h', '6d',
            '7c', '7s', '7h', '7d',
            '8c', '8s', '8h', '8d',
            '9c', '9s', '9h', '9d',
            '10c', '10s', '10h', '10d',
            'Jc', 'Js', 'Jh', 'Jd',
            'Qc', 'Qs', 'Qh', 'Qd',
            'Kc', 'Ks', 'Kh', 'Kd',
            'Ac', 'As', 'Ah', 'Ad',
        ];

        shuffle($cards);

        return $cards;
    }
}
