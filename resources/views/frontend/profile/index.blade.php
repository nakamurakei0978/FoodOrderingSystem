@extends('frontend.layouts.master')
@section('title', 'Settings')
@section('userbar')
    
    <a href="{{ route('profile') }}">
        <li>Profile</li>
    </a>
    <a href="#">
        <li>Balance</li>
    </a>
    <a href="#">
        <li>Settings</li>
    </a>
    <form action="{{ route('logout.post') }}" method="POST">
        @csrf
        <button type="submit">
            <li>Logout</li>
        </button>
    </form>
@endsection