<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login_css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
	<img src="logo.png" id="charusat_logo">
    <div id="login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>

        <form action="Main_file_open_me.php" method="GET">
            <div class="input">
                <div class="icon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" name="username" required>
            </div>


            <div class="input">
                <div class="icon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" name="password" required>
            </div>
            <br><br>
            <input type="submit" value="Log In" />
        </form>




    </div>


</body>

</html>
