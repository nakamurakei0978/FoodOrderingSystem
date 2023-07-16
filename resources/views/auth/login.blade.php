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
            @if (session('error'))
                <p>{{session('error')}}</p>
            @endif
            <input value="{{old('name_or_email')}}" type="text" name="name_or_email" placeholder="Email or Username" required autofocus> 
            @error('name_or_email')
                <p>{{$message}}</p>
            @enderror
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
                <p>{{$message}}</p>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection