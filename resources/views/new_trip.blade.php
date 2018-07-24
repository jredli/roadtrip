@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="mt-4">Create new trip</h1>
    <div class="form-group">
        <div class="row">

          {!! Form::open(['route' => 'trips.store', 'method' => 'post', 'files' => true]) !!}

           {!! Form::label('name', 'Trip name') !!}
           {!! Form::text('name', null, ['class' => 'form-control']) !!}

           {!! Form::label('type', 'Type name') !!}
           {!! Form::text('type', null, ['class' => 'form-control']) !!}

           {!! Form::label('roadtrip', 'Upload .gpx file') !!}
           {!! Form::file('roadtrip', ['class' => 'form-control']) !!}

           {!! Form::submit('Create', ['class' => 'btn btn-info mt-2']); !!}

          {!! Form::close() !!}

        </div>
      </div>
    </div>
@endsection