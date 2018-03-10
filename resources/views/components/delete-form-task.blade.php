{!! Form::open(['action' => ['TaskController@destroy',$task->id], 'method' => 'delete']) !!}
    {{ Form::submit('Delete', array_merge(['class' => 'btn btn-primary'])) }}
{!! Form::close() !!}