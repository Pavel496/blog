@extends('admin.layout')

@section('content')

  <h1>Дело сдвинулось ...</h1>
  <p>Пользователь: {{auth()->user()->name}}</p>

@endsection
