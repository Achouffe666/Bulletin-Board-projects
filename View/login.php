<?php
    session_start();

    $_SESSION["id"] = 2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style_test.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row header">
            <img class="img-fluid image-header" src="../images/rail_duotone.png" alt="image header rail train" style="width: 100%; height: 100%;">
        </div>
        <div class="row content row-content justify-content-center ">
            <div class="card">
                <div class="card-body">
                    <p class="h1">Login</p>
                    <form method="post" action="login_post.php">
                            <div class="form-group">
                                <label for="nickname">Pseudo</label>
                                    <div class="input-group-append">
                                    <input type="text" class="form-control" id="nickname" name="nickname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group-append">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="remember" id="remember" value="true">
                                    <label class="form-check-label" for="Remember">Se souvenir de moi</label>
                            </div>
                            <button type="submit" class="btn btn-md btn-outline-info mb-2 btn-block mx-auto">Envoyer</button>
                       
                    </form>
                </div>

            </div>
        </div>
        
    </div>
    <div class="row-fluid footer">
    </div>
</body>
</html>