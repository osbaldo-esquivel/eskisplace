@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-head">
                    <h1>King's Cup</h1>
                </div>
                <div class="card-body">
                    <div class="card" id="card">
                        <img src="{{ asset("images/cards/$start.jpg") }}" height="700px" alt="cards">
                    </div>
                </div>
            </div>
            <button class="btn btn-success" class="btn">Start!</button>
        </div>
    </div>
</div>
@endsection