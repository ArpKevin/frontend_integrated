@extends('shared.layout')

@section('title', 'Register')

@section('content')
    <div class="formDiv">

        <span class="header">Register</span>

        <form action="">
            <span>Username</span>
            <input type="text" name="username" id="username">
            <span>Email</span>
            <input type="email" name="email" id="email">
            <span>Password</span>
            <div class="password-container">
                <input type="password" id="password" maxlength="20">
                <button class="password-btn" type="button"><img src="imgs/black/visibility.svg" alt="Show Password Button"></button>
            </div>
            <span>Confirm Password</span>
            <div class="password-confirmation-container">
                <input type="password" id="password_confirmation" maxlength="20">
                <button class="password-confirmation-btn" type="button"><img src="imgs/black/visibility.svg" alt="Show Password Button"></button>
            </div>
            <input type="button" value="Register">
        </form>

        <span id="login"><a href="{{ route('login') }}">Already have an account?</a></span>

    </div>
@endsection
