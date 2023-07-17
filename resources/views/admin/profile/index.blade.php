@extends('admin.layouts.master')
@section('title', 'Settings')
@section('userbar')

    <a href="{{ route('admin.profile') }}">
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
admin profile
@endsection
