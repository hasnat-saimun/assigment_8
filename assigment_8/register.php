<?php

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teacher Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1 class= "text-center "><ul>Register Form</ul></h1>
    <!--FORM-->
    <div class = "container my-4">
        <div class = "row">
            <div class = "col-8 mx-auto">
                <div class = "card">
                    <div class = "card-body">
                        <form  action="output.php" method = "post">
                                    <div class="col-md-12">
                                        <label for="inputPassword" class="form-label">Frist Name</label>
                                        <input type="text" name="first_name" class="form-control" id="inputPassword"required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputPassword1" class="form-label">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" id="inputPassword1"required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputPassword9" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="inputPassword9"required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name = "password" placeholder = "*******"required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword2" name = "confirm_password" placeholder = "*******"required>
                                    </div>
                                    <div class="col-md-12 my-4">
                                        <button type = "submit" class = "btn btn-primary" name="submit">Sing In</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>