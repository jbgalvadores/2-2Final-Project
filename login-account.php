<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css\style-login.css"/>
        <script src="login.js"></script>
    </head>
    <body>
<div class="container">
        <div class="main">
            <h2>Login</h2>
            <form id="form_id" method="post" name="myform">
            <label>User Name :</label>
        <input type="text" name="username" id="username"/>
        <label>Password :</label>
        <input type="password" name="password" id="password"/>
    <input type="button" value="Login" id="submit" onclick="validate()"/>
    </form>
        </div>
    </div>
    </body>
</html>