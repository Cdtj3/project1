<?php require "partials/head.php"?>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="bg-primary text-white ">
                Welkom ADSD 2018!
            </div>
        </div> <!-- End div greeting -->
        <hr>
        <div class="col-10 offset-1">
            <h4>Players</h4>

        </div><!-- End div - players -->
        <hr>
        <div class="col-10 offset-1">
            <form method="post" action="add_user">
                <main class="my-form">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Add player</div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="email_address" class="col-md-4 col-form-label text-md-right">Voornaam</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="fname">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="user_name" class="col-md-4 col-form-label text-md-right">Achternaam</label>
                                            <div class="col-md-6">
                                                <input type="text"  class="form-control" name="lname">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">Email</label>
                                            <div class="col-md-6">
                                                <input type="text"  class="form-control" name="email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="present_address" class="col-md-4 col-form-label text-md-right">Mobiel</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="mobile">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="present_address" class="col-md-4 col-form-label text-md-right">wachtwoord</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="present_address" class="col-md-4 col-form-label text-md-right">Nickname</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nname">
                                            </div>
                                        </div>

                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary" name="reg_user">
                                                Register
                                            </button>
                                        </div>
                                    </div>
            </form>

        </div><!-- End div - class Player-->
    </div> <!-- End div row -->
</div> <!-- End container -->
<?php require "partials/foot.php"?>