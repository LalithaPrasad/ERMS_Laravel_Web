@extends('baseTemplate')
@section('content')
<form action="{{route('delete')}}" method='post'>
    @csrf
    <fieldset>
        <legend>Delete employee</legend>
        <p><input type='number' name='id' placeholder='Enter employee id to delete' autofocus /></p>
        <p><input type='submit' value='Delete' /></p>
    </fieldset>
</form>
@endsection
