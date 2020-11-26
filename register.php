<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
    <!-- <?php include "header.php"; ?> -->
    <div class="register">
        <form class="registerUser" method="POST">
            <h2>Register</h2>
            <h3>Username</h3>
            <input type="text" placeholder="Enter your username" name="username" required id="username">
            <h3>Email</h3>
            <input type="text" placeholder="Enter your Email" name="email" required id="email">
            <h3>Password</h3>
            <input type="password" placeholder="Enter your Password?" name="password" required id="password">
            <h3>Confirm Password</h3>
            <input type="password" placeholder="Re-Enter your Password?" name="confirmPassword" required id="confirmPassword">
            
            <input type="submit" name='submit' id='submit' value='LOGIN' >
            <script>
                document.querySelector('#submit').addEventListener('click',()=>{
                let password = document.querySelector('#password').value;
                let confirmPassword = document.querySelector('#confirmPassword').value;

                if (password === confirmPassword) {

                } else {
                    alert('Your password does not match!')
                }
                })
            </script>
        </form>
    </div>
    <?php

        include 'database.php';
        global $db;

        if (isset($_POST["submit"])){
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];


            $q = $db->prepare("INSERT INTO users(nickname,email,password) VALUES(:username, :email, :password)");
            $q->execute([
                'username' => $username,
                'email' => $email,
                'password' => $password //password_hash($password, PASSWORD_DEFAULT) 
            ]);
        }

    ?> 
    <!-- <?php include "footer.php"; ?> -->
    </body>
    </html>