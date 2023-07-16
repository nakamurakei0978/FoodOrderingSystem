@extends('admin.layouts.master')
@section('title','Dashboard')
@section('userbar')
    <li>Profile</li>
    <form action="{{route('logout.post')}}" method="POST">
        @csrf
        <button type="submit"><li>Logout</li></button>
    </form>
@endsection
@section('content')
    <h1>welcom to Dashboard.</h1>
    @if (session('msg'))
        {{session('msg')}}
    @endif
@endsection