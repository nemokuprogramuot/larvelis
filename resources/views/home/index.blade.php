@extends('layouts.app')

@section('content')
    <div class="container grid-lg">
        <h1 class="text-center mt-2">Available Conferences</h1>

        <div class="columns">
            @foreach($confrences as $confrence)
                <div class="column col-6 col-md-12 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ $confrence->title }}</h4>
                        </div>
                        <div class="card-body">
                            <p>{{ $confrence->text }}</p>
                            <p><strong>Date:</strong> {{ $confrence->date }}</p>
                            <p><strong>Address:</strong> {{ $confrence->adress }}</p>
                            <p><strong>Participants:</strong> {{ $confrence->participant_number }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('home.view', $confrence->id) }}" class="btn btn-primary btn-block">View</a>
                            <a href="{{ route('home.edit', $confrence->id) }}" class="btn btn-primary btn-block">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
