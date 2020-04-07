<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class KingsCupGame extends Model
{
    protected $fillable = ['status', 'user_id', 'turns', 'users', 'last_turn', 'created_at', 'winner'];
    protected $table = 'kings_cup_games';
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getTurns(): ?int
    {
        return $this->turns;
    }

    /* public function getUsers(): array
    {
        return json_decode($this->users, true);
    } */

    public function getLastTurn(): string
    {
        return $this->last_turn;
    }

    public function getCreatedAt(): Carbon
    {
        return $this->created_at;
    }

    public function getWinner(): ?int
    {
        return $this->winner;
    }

    public function getUpdatedAt(): Carbon
    {
        return $this->updated_at;
    }
}
