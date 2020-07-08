@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>lista prodotti</h1>
                @foreach ($listaprodotti as $prodotto)
                    <p>{{ $prodotto->name }}</p>
                @endforeach
            </div>

        </div>

    </div>

@endsection

@section('titolo', 'lista prodotti')
