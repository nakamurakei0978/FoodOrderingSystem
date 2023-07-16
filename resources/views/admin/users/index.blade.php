@extends('admin.layouts.master')
@section('title', 'Users')
@section('userbar')
    
    <a href="{{ route('profile') }}">
        <li>Profile</li>
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
@section('content')
    <h1>Users tables</h1>
    <span></span>
@endsection