@extends('baseTemplate')
@section('content')
<fieldset>
    <legend>Menu</legend>
    <ul>
        <li><a href="{{route('add')}}">Add employee</a></li>
        <li><a href="{{route('delete')}}">Delete employee</a></li>
        <li><a href="{{route('modify')}}">Modify employee</a></li>
        <li><a href="{{route('display')}}">Display employees</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
</fieldset>
@endsection
