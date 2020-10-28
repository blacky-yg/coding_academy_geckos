<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/index.css">
        <title>My Shop</title>
    </head>
    <body>

        <?php
            $nameErr = $emailErr = $passwordErr = '';
            $name = $email = $password = $password_confirmation = '';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST['name']) || (strlen($_POST['name']) < 3 || strlen($_POST['name']) > 10))
                    $nameErr = "Invalid name";
                else
                    $name = $_POST['name'];

                if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                    $emailErr = "Invalid email";
                else
                    $email = $_POST['email'];

                if (empty($_POST['password']) || (strlen($_POST['password']) < 3 || strlen($_POST['password']) > 10) || $_POST['password'] != $_POST['password_confirmation'])
                    $passwordErr = "Invalid password or password confirmation";
                else
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                if (!$nameErr && !$emailErr && !$passwordErr) {
                    $user_created = array(
                        "created_at" => date('Y-m-d H:i:s'),
                        "password" => $password
                    );
                    $info = json_encode($user_created);
                    file_put_contents("info.json", $info);
                    $user = "User created";
                }
            }
        ?>

        <span class="error"><?php if ($nameErr) echo $nameErr."<br>"; ?></span>
        <span class="error"><?php if ($emailErr) echo $emailErr."<br>"; ?></span>
        <span class="error"><?php if ($passwordErr) echo $passwordErr."<br><br>"; ?></span>
        <span class="error"><?php if ($user) echo $user."<br><br>"; ?></span>

        <form action="../index.php" method="POST">
            <div class="container register-form">
                <div class="form">
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Your Username *" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="" placeholder="Your Password *" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password *" value="" required />
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btnSubmit">Submit</button>
                    </div>
                    <div class="row">
                        Already have an account?   <a href="./signin.php"> Login Here</a>
                    </div>
                </div>
            </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>