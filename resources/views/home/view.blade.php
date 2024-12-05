@extends('layouts.app')

@section('content')
    <div class="container grid-lg mt-2">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">{{ $confrence->title }}</h1>
            </div>
            <div class="card-body">
                <p class="card-subtitle">{{ $confrence->text }}</p>
                <hr>
                <p><strong>Date:</strong> {{ $confrence->date }}</p>
                <p><strong>Address:</strong> {{ $confrence->adress }}</p>
                <p><strong>Participants:</strong> {{ $confrence->participant_number }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('home.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
