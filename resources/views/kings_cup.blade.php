@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-head">
                    <h1>King's Cup</h1>
                </div>
                <div class="card-body" style="width:100%;">
                    <div class="row">
                        <div class="col-md-6 first-card">
                            <div class="cards" id="back">
                                <img src="{{ asset("images/cards/back.jpg") }}" alt="back" name="back" />
                            </div>
                        </div>
                        <div class="col-md-6 second-card">
                            <div class="cards">
                              <img src="{{ asset("images/cards/$card.png") }}" alt="next" name="next" id="number-card" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($winner)
                <div class="col-md-8 text-center">
                    {{ $winner }}
                </div>
            @else
                <form method="POST" action="/submit-kings">
                    @csrf
                    <div class="text-center mt-2">
                        <input type="hidden" name="cards[]" value="{{ $cards }}" />
                        <input type="hidden" name="turn" value="{{ $turn }}" />
                        <input type="hidden" name="game-id" value="{{ $game_id }}" />
                        <button class="btn btn-success" type="submit">Next card</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>
@endsection