<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <meta name='viewport' content='width=device-width, initial-scale=1'/>
        <title>Employee Record Management System</title>
        <link rel='shortcut icon' type='image/png' href="{{asset('images/favicon.ico')}}" />
        <link rel='stylesheet' type='text/css' href="{{asset('css/erms.css')}}"/>
    </head>
    <body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    @if(Session::has('message'))
        <p>{{Session::get('message')}}</p>
    @endif
    @yield('content')
    </body>
</html>
