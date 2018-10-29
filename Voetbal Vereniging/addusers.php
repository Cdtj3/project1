<?php require "head.php" ?>
<?php require "headeradmin.php" ?>
<?php include('require/register.php')?>

<body id="page-top">
<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Hier kunt u gebruikers toevoegen</h1>
        <hr class="star-light">
<!--        <h2 class="font-weight-light mb-0">Made by team 5</h2>-->
    </div>
</header>

    <form method="post" action="addusers.php">
        <?php include('errors.php'); ?>


        <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Register</div>
                            <div class="card-body">
                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Gebruikersnaam</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="user_name" class="col-md-4 col-form-label text-md-right">email</label>
                                        <div class="col-md-6">
                                            <input type="text"  class="form-control" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">wachtwoord</label>
                                        <div class="col-md-6">
                                            <input type="text"  class="form-control" name="password_1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="present_address" class="col-md-4 col-form-label text-md-right">wachtwoord bevestigen</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="password_2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right">voornaam</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="f_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number" class="col-md-4 col-form-label text-md-right">geslacht</label>
                                        <div class="col-md-6">
                                            <input type="radio" name="gender" value="Male"> Man
                                            <input type="radio" name="gender" value="Female"> Vrouw
                                            <input type="radio" name="gender" value="Other"> Anders
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right">type</label>
                                        <div class="col-md-6">
                                            <input type="text"  class="form-control" name="type">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right">member_col</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="member_col">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number" class="col-md-4 col-form-label text-md-right"> rijbewijs?</label>
                                        <div class="col-md-6">
                                            <input type="radio" name="year_driving_licence" value="1"> ja
                                            <input type="radio" name="year_driving_licence" value="0"> nee

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right">leden nummer</label>
                                        <div class="col-md-6">
                                            <input type="int" class="form-control" name="member_nr">
                                        </div>
                                    </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="reg_user">
                                            Register
                                        </button>
                                    </div>
                            </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</body>
</main>

