@extends('layouts.app')

@section('content')


    <a href="{{ action('TaskController@index') }}" class="btn btn-primary pull-right">Return</a>

    <br><br>

    {!! Form::open(['action' => 'TaskController@store']) !!}
        @include('components.form-task')
    {!! Form::close() !!}

    <br>

    @include('components.errors')

@endsection