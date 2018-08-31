@extends('layouts.app')

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection
