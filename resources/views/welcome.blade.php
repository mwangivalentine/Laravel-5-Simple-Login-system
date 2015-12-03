<html>
<head>
    
</head>
<body>
    <h2>Welcome visitor!</h2><br>
    <p>
        <label>Log in below</label>
        <form action="{{ url()}}" method="POST">
            <input type="text" name="email"></input><br>
            <input type="password" name="password"></input><br>
            <input type="submit" value="Login"></input>        
        </form>
    </p>
    <p>
        <label> or Register here</label>
        <a href=""></a>
    </p>
</body>
</html>