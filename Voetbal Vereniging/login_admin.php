<?php include('require/login_admin.php'); ?>
<html>
    <head>
        <link rel="stylesheet" href="vendor/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css">
        <script src="vendor/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body id="LoginForm">
        <div class="container">
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                        <h2>Login</h2>
                        <p>Vul uw gebruikersnaam en wachtwoord in.</p>
                    </div>
                    <form method="post" action="login_admin.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="login_user">Login</button>
                    </form>
                </div>
                <p class="botto-text">Voetbal club AVV</p>
                </div>
            </div>
        </div>
    </body>
</html>