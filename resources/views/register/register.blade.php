<html>
<head>
    <title>Register Below</title>
</head>
<body>
    <h2>Welcome visitor!</h2><br>
    <p>
        <label>Register Below</label>
        <form action="{{ route('register')}}" method="POST">
        {!! csrf_field() !!}
            <input type="text" name="username" placeholder="Username"></input><br>
            <input type="text" name="email" placeholder="Email"></input><br>
            <input type="password" name="password" placeholder="password"></input><br>
            <input type="submit" value="Register"></input>        
        </form>
    </p>
    @if (Session::has('info'))
        {{Session::get('info')}}
    @endif
    <p>
        <a href="{{ route('home') }}">or Log in here</a>
    </p>
</body>
</html>