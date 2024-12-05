@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column col-6 offset-3">
                <form action="{{ route('home.update', $confrence->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <h2>Create a new conference</h2>

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            value = "{{ $confrence->title }}"
                            class="form-input"
                            required
                        >
                    </div>
                    <div class="form-group">
                        <label for="text">Description:</label>
                        <textarea
                            rows="5"
                            id="text"
                            name="text"
                            class="form-input"
                            required
                        >
                            {{ $confrence->text}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Select a Date:</label>
                        <input
                            type="date"
                            id="date"
                            name="date"
                            value = "{{ $confrence->date }}"
                            class="form-input"
                            required
                        >
                    </div>
                    <div class="form-group">
                        <label for="adress">Address:</label>
                        <input
                            type="text"
                            id="adress"
                            name="adress"
                            value = "{{ $confrence->adress }}"
                            class="form-input"
                            required
                        >
                    </div>
                    <div class="form-group">
                        <label for="participant_number">Number of participants:</label>
                        <input
                            type="number"
                            id="participant_number"
                            name="participant_number"
                            value = "{{ $confrence->participant_number }}"
                            class="form-input"
                            required
                        >
                    </div>

                    <button type="submit" class="btn">Save</button>
                    <a href="{{ route('home.index') }}" class="btn btn-secondary">Back to List</a>

                    <!-- validation errors -->

                </form>
            </div>
        </div>

    </div>
@endsection
