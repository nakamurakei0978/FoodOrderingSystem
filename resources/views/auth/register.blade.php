@extends('auth.layouts.master')
@section('title','Register')
@section('userbar')
    <a href="{{route('login')}}"><li>Login</li></a>
    <a href="{{route('home')}}"><li>Home</li></a>
@endsection
@section('content')
    <h1>Welcome to Register</h1>
    
@endsection