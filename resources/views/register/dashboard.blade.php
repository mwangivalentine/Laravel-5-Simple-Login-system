<html>
<head>
    <title>Register Below</title>
</head>
<body>
    <h2>Welcome {{ Auth::user()-> username }}</h2><br>

    <p>
        Your Dashboard awaits.<br><br>
        Your Email: {{ Auth::user()-> email }}<br>
        Your Password: {{ Auth::user()-> password }}

    </p>
    <p>
        <a href="{{ route('logout')}}">Log out here</a>
    </p>
</body>
</html>