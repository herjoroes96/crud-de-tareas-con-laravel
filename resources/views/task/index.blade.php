@extends('layouts.app')

@section('content')



    <a href="{{ action('TaskController@create') }}" class="btn btn-primary pull-right">Add task</a>

    <br><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Due Date</th>
                <th scope="col">State</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($tasks) && count($tasks) > 0)
                @foreach($tasks as $task)
                    <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->due_date }}</td>
                        <td>{{ $task->state }}</td>
                        <td class="btn-group" role="group">
                            <a href="{{ action('TaskController@edit',$task->id) }}" class="btn btn-success">Edit</a>
                            @include('components.delete-form-task')
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">there are no saved tasks</td>
                </tr>
            @endif
        </tbody>
    </table>



@endsection