@extends('shared.layout')

@section('title', 'Login')

@section('content')
    <div class="formDiv">

        <span class="header">Login</span>

        <form action="">
            <span>Username</span>
            <input type="text" name="username" id="username">
            <span>Password</span>
            <div class="password-container">
                <input type="password" id="password">
                <button class="password-btn" type="button"><img src="imgs/black/visibility.svg" alt="Show Password Button"></button>
            </div>
            <input type="button" value="Login">
        </form>

        <span id="register"><a href="{{ route('register') }}">Don't have an account yet?</a></span>
    </div>
@endsection
