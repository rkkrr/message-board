@extends('layouts.app')

@section('content')

<h1>メッセージ新規作成ページ</h1>

    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}
  {{ '<p style="color: red;">When passed through htmlentities function</p>' }}
      {!! Form::label('content', 'メッセージ:') !!}
      

    {!! Form::close() !!}


@endsection