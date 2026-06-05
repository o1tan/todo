@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <div class="todo__alert">
    <div class="todo__alert--success">
        Todoを追加しました。
    </div>
</div>
@endsection