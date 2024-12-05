@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column col-6 offset-3">
                <form action="{{route('home.store')}}" method="POST">
                    @csrf
                    <h2>Create a new conference</h2>

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input
                            type="text"
                            id="title"
                            name="title"
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
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Select a Date:</label>
                        <input
                            type="date"
                            id="date"
                            name="date"
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
                            class="form-input"
                            required
                        >
                    </div>

                    <button type="submit" class="btn">Create</button>

                    <!-- validation errors -->

                </form>
            </div>
        </div>
    </div>
@endsection
