@extends('auth.layouts.master')
@section('title','Login')
@section('userbar')
    <a href="{{route('register')}}"><li>Register</li></a>
    <a href="{{route('home')}}"><li>Home</li></a>
@endsection
@section('content')
    <h1>Welcome to Login</h1> <p>{{session('msg')}}</p>
    <div class="wrapper">
        <form action="{{route('login.post')}}" method="POST">
            @csrf
            <legend>Login</legend>
            <input type="text" name="name" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
                <p>{{$message}}</p>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection