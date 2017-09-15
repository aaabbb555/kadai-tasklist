@extends('layouts.app')

@section('content')

  <h1>id: {{ $task->id }} のタスク編集ページ</h1>

  <div class="row">aaa
    <div class="col-xs-12 col-sm-offcet-2 col-sm-8 col-lg-offcet-3 col-lg-6">
      {!! Form::model($task, ['route' => ['tasks.update', $task->id],
        'method' => 'put']) !!}
        
        <div class="form-group">
          {!! Form::label('status', '状態') !!}
          {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class='form-group'>
          {!! Form::label('content', 'タスク:') !!}
          {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
      {!! Form::close() !!}
    </div>
  </div>
    
@endsection