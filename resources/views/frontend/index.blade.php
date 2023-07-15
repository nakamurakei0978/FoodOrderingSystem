@extends('frontend.layouts.master')
@section('title','Home')
@section('userbar')
    <a href="{{route('login')}}"><li>Login</li></a>
    <a href="{{route('register')}}"><li>Register</li></a>
@endsection
@section('content')
    <h1>Welcome to Register</h1>
@endsection