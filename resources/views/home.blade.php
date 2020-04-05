@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Games</div>
                <div class="card-body">
                    <div class="float-left">
                        <a href="{{ route('kings-cup') }}">
                            <img src="{{ asset('images/posoy_dos.png') }}" alt="Posoy Dos"/>
                        </a>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('kings-cup') }}">
                            <img src="{{ asset('images/kings_cup.png') }}" alt="King's Cup">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
