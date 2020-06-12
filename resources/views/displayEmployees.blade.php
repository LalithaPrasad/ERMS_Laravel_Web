@extends('baseTemplate')
@section('content')
<fieldset>
    <legend>Display employees</legend>
    @if(count($employees)==0)
        <p>Employee database is empty</p>
    @else
        <table>
            <tr>
                <th>Id</th><th>Name</th><th>Age</th>
                <th>Education</th><th>Role</th>
            </tr>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->age}}</td>
                <td>{{$employee->ed}}</td>
                <td>{{$employee->role}}</td>
            </tr>
            @endforeach
        </table>
    @endif
</fieldset>
<div><a href="{{route('menu')}}">Back to menu</a></div>
@endsection
