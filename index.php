<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">

    <div class="login-page">
        <div class="form">

            <form method="POST" action="login.php">
                <lottie-player src="https://assets9.lottiefiles.com/private_files/lf30_m6j5igxb.json" style="justify-content: center;" loop autoplay></lottie-player>
                <input type="text" placeholder="&#xf007;  username" class="form-control" name="username" />
                <input type="password" id="password" placeholder="&#xf023;  password" class="form-control" name="password" />
                <i class="fas fa-eye" onclick="show()"></i>
                <br>
                <br>
                <button type="submit">LOGIN</button>
                <a href="home.php" class="btn btn-success pull-right" <p class="message"></p>
            </form>

        </div>
    </div>

    <script>
        function show() {
            var password = document.getElementById("password");
            var icon = document.querySelector(".fas")

            // ========== Checking type of password ===========
            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        };
    </script>

</body>

</html>