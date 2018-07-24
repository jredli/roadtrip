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
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
