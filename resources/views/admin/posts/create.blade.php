@extends('layouts.admin')

@section('content')

<h1>Create Posts</h1>
<div style="margin-right: 500px;">
{!! Form::open( ['method'=>'POST', 'action' => 'AdminPostController@store', 'files'=>true]) !!}

    <div class="form-group">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('category_id', 'Category:') !!}
      {!! Form::select('category_id', [''=>'option'], null, ['class' => 'form-control']) !!}
    </div>
    <!-- <div class="form-group">
      {!! Form::label('user_id', 'User:') !!}
      {!! Form::select('user_id', [''=>'option'], null, ['class' => 'form-control']) !!}
    </div> -->
    <div class="form-group">
      {!! Form::label('photo_id', 'Photo:') !!}
      {!! Form::file('photo_id', [''=>'option'], null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('model', 'Model') !!}
      {!! Form::textarea('body', null, ['class' => 'form-control', 'row'=>2]) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Create Post', null, ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}
</div>
@endsection