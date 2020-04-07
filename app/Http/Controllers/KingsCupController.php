<?php namespace App\Http\Controllers;

use App\KingsCupGame;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

class KingsCupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user_id = (int) $request->user()->id;

        $turn = (int) $request->input('turn');

        if ($turn === 1) {
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

            $card = $cards[0];

            $cards = json_encode($cards);

            $game = new KingsCupGame();

            $game_id = $this->initializeGame($user_id, $cards[0], $game);
        } else {
            $cards = $request->input('cards');

            $card = json_decode($cards)[0];

            $game_id = $request->input('game_id');
        }

        return view('kings_cup', [
            'cards' => $cards,
            'turn' => $turn + 1,
            'card' => $card,
            'winner' => null,
            'game_id' => $game_id,
        ]);
    }

    public function submit(Request $request)
    {
        $turn = (int) $request->input('turn');

        $current_cards = json_decode($request->input('cards')[0]);

        array_shift($current_cards);

        KingsCupGame::where('id', $request->input('game-id'))->update([
            'status' => 'in_progress',
            'user_id' => $request->user()->id,
            'turns' => $turn,
            'users' => json_encode([null]),
            'last_turn' => $current_cards[0],
            'winner' => null,
        ]);

        return redirect()->route('kings-cup', [
            'turn' => $turn,
            'cards' => json_encode($current_cards),
            'card' => $current_cards[0],
            'winner' => null,
            'game_id' => $request->input('game-id'),
        ]);
    }

    private function initializeGame(int $user_id, string $last_turn, KingsCupGame $game): int
    {
        $game->fill([
            'status' => 'ready',
            'user_id' => $user_id,
            'turns' => 1,
            'users' => json_encode([null]),
            'last_turn' => $last_turn,
            'winner' => null,
        ]);

        $game->save();

        return $game->getId();
    }
}
