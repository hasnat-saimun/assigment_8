<?php
$pass = "Hasnat2022";
$user = "hasnat@gmail.com";

if(isset($_GET['submit'])):
    $a = $_GET['user'];
$b = $_GET['pass'];
    if($user == $a && $pass == $b):
       $c ="Right";
    else:
       $d ="Rong";
    endif;
endif;


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row mt-4">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 style = "text-align:center; text-decoration:underline">User Login</h2>
                        <form method = "get" class = "form" action = "">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "user" placeholder = "Enter your user name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name = "pass" placeholder = "*******" required>
                                </div>
                            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                       </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                    <div class="alert alert-success rounded-0">
                    User Login Is : <?php
                    

                    if($user == $a && $pass == $b):
                        echo $c;
                    else:
                        echo $d;
                    endif;

                    
                    ?>
                    </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
