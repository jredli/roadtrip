@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="mt-4">List of your trips</h1><a href="{{ route('trips.create') }}" class="btn btn-info">New Trip</a>
    <div class="row">
      <div class="col-lg-12">
        <table class="table mt-3">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Link</th>
          </tr>
          </thead>
          <tbody>
          @foreach($trips as $trip)
            <tr>
              <th scope="row">{{ $trip->id }}</th>
              <td>{{ $trip->name }}</td>
              <td>{{ $trip->trip_type->name }}</td>
              <td>{{ $trip->name }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
