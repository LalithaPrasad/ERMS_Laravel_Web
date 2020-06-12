@extends('baseTemplate')
@section('content')
<form action="{{route('signup')}}" method='post'>
    @csrf
    <fieldset>
        <legend>Signup</legend>
        <p><input name='username' type='text' placeholder='Enter username' required autofocus /></p>
        <p><input name='password' type='password' placeholder='Enter password' required /></p>
        <p><input name='password_repeat' type='password' placeholder='Enter password again' required /></p>
        <p><input type='submit' value='Signup' /></p>
    </fieldset>
</form>
@endsection
