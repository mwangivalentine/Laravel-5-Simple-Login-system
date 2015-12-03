<html>
<head>
    <title>Home - Log in</title>
</head>
<body>
    <h2>Welcome visitor!</h2><br>
    <p>
        <label>Log in below</label>
        <form action="{{ route('home') }}" method="POST">
        {!! csrf_field() !!}
            <input type="text" name="email" placeholder="Email"></input><br>
            <input type="password" name="password" placeholder="Password"></input><br>
            <input type="submit" value="Login"></input>        
        </form>
    </p>
    @if (Session::has('info'))
    	{{ Session::get('info') }}
    @endif
    <p>
        <a href="{{ route('register')}}"> or Register here</a>
    </p>
</body>
</html>