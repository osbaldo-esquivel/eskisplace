@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Games</div>
                <div class="card-body">
                    <div class="float-left">
                        <form action="GET" action="/posoy-dos">
                            @csrf
                            <img src="{{ asset('images/posoy_dos.png') }}" alt="Posoy Dos"/>
                            <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                            <button class="btn btn-primary" type="submit">Start game</button>
                        </form>
                    </div>
                    <div class="float-right">
                        <form method="GET" action="/kings-cup">
                            @csrf
                            <img src="{{ asset('images/kings_cup.png') }}" alt="King's Cup">
                            <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="turn" value="1" />
                            <button class="btn btn-primary" type="submit">Start game</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
