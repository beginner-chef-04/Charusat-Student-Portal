<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
<br><br><br><br>
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i> Register
        </div>

        <form>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" placeholder="Email" type="email" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>
			
            <div class="input">
                <input id="password" placeholder="Name" type="text" required class="validate" autocomplete="off">
            </div>		

            <div class="input">
                <input id="password" placeholder="Blood Grup" type="text" required class="validate" autocomplete="off">
            </div>	

            <div class="input">
                <input id="password" placeholder="Phone Number" type="text" required class="validate" autocomplete="off">
            </div>	
			

<br><br>

            <a href="login.php" target="_self" id="ab">Register</a>
        </form>



        <div class="register">
            Do you already have an account?
            <a href="login.php" target="_self"><button id="register-link">Log In here</button></a>
        </div>
    </div>
</body>

</html>
