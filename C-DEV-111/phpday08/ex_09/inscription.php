<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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

        <form action="inscription.php" method="POST">
            <label for="name">Enter your name:</label><br>
                <input type="text" id="name" name="name" placeholder="name"><br>
            <label for="email">Enter your mail:</label><br>
                <input type="text" id="email" name="email" placeholder="email"><br>
            <label for="password">Votre mot de passe :</label><br>
                <input type="password" name="password" id="password" placeholder="password"/><br>
            <label for="password_confirmation">Votre mot de passe :</label><br>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password_confirmation"/><br>
            <input type="submit" value="Submit"><br>
        </form>
    </body>
</html>