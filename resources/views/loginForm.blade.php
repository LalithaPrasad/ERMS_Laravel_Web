@extends('baseTemplate')
@section('content')
<form action="{{route('login')}}" method='post'>
    @csrf
    <fieldset>
        <legend>Login</legend>
        <p><input name='username' type='text' placeholder='Enter username' required autofocus /></p>
        <p><input name='password' type='password' placeholder='Enter password' required /></p>
        <p><input type='submit' value='Login' /></td>
    </fieldset>
</form>
<p><a href="{{route('signup')}}">Click here to signup</a></p>
@endsection
