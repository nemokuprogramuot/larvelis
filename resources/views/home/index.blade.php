@extends('layouts.app')

@section('content')

    <h1>Available conferences</h1>
    <ul>
        @foreach($confrences as $confrence)

            <div>
                <h3>{{$confrence->title}}</h3>
            </div>

        @endforeach
    </ul>
@endsection
