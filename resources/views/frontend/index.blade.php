@extends('frontend.layouts.master')
@section('title', 'Home')
@section('userbar')
    @auth
        <a href="{{ route('profile') }}">
            <li>Profile</li>
        </a>
        <form action="{{ route('logout.post') }}" method="POST">
            @csrf
            <button type="submit">
                <li>Logout</li>
            </button>
        </form>
    @else
        <a href="{{ route('login') }}">
            <li>Login</li>
        </a>
        <a href="{{ route('register') }}">
            <li>Register</li>
        </a>
    @endauth
@endsection
@section('content')
    <h1>Welcome to Homepage</h1>
    
@endsection
