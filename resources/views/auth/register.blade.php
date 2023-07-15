@extends('auth.layouts.master')
@section('title','Register')
@section('userbar')
    <a href="{{route('login')}}"><li>Login</li></a>
    <a href="{{route('home')}}"><li>Home</li></a>
@endsection
@section('content')
    <h1>Welcome to Register</h1>
    <div class="wrapper">
        <form action="{{route('register.post')}}" method="POST">
            @csrf
            <legend>Register</legend>
            <input value="{{old('name')}}" type="name" name="name" placeholder="Username" required>
            <input value="{{old('email')}}" type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
                <p>{{$message}}</p>
            @enderror
            <input type="password" name="re-password" placeholder="Re-Password" required>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection