@extends('auth.layouts.master')
@section('title','Login')
@section('userbar')
    <a href="{{route('register')}}"><li>Register</li></a>
    <a href="{{route('home')}}"><li>Home</li></a>
@endsection
@section('content')
    <h1>Welcome to Homepage</h1>
@endsection