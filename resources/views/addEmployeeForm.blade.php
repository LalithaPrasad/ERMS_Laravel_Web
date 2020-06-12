@extends('baseTemplate')
@section('content')
<form action="{{route('add')}}" method='post'>
    @csrf
    <fieldset>
        <legend>Add Employee</legend>
        <p><input type='text' name='name' placeholder='Enter employee name' required autofocus /></p>
        <p><input type='number' name='age' placeholder='Enter employee age' required /></p>
        <p><input type='text' name='ed' placeholder='Enter employee education' required /></p>
        <p><input type='text' name='role' placeholder='Enter employee role' required /></p>
        <p><input type='submit' value='Add employee' /></p>
    </fieldset>
</form>
@endsection
