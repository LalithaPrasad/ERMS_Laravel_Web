@extends('baseTemplate')
@section('content')
<form action="{{route('modify')}}" method='post'>
    @csrf
    <fieldset>
        <legend>Modify employee</legend>
        <p><input type='number' name='id' placeholder='Enter employee id to modify' /></p>
        <p><input type='text' name='ed' placeholder='Enter new education or leave empty' /></p>
        <p><input type='text' name='role' placeholder='Enter new role or leave empty' /></p>
        <p><input type='submit' value='Modify' /></p>
    </fieldset>
</form>
@endsection
