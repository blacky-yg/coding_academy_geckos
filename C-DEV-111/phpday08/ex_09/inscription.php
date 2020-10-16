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
                if (empty($_POST['name']))
                    $nameErr = "Invalid name";
                else
                    $name = $_POST['name'];

                if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                    $emailErr = "Invalid email";
                else
                    $email = $_POST['email'];

                if (empty($_POST['password']) || empty($_POST['password_confirmation']) || $_POST['password'] != $_POST['password_confirmation'])
                    $passwordErr = "Invalid password or password confirmation";
                else
                    $password = password_hash($_POST['password']);
            }
        ?>

        <span class="error"><?php echo $nameErr; ?></span>
        <span class="error"><?php echo $emailErr; ?></span>
        <span class="error"><?php echo $passwordErr; ?></span>

        <form action="inscription.php" method="POST">
            <label for="name">Enter your name:</label><br>
                <input type="text" id="name" name="name" value="name"><br>
            <label for="email">Enter your mail:</label><br>
                <input type="text" id="email" name="email" value="email"><br>
            <label for="password">Votre mot de passe :</label><br>
                <input type="password" name="password" id="password" value="password"/><br>
            <label for="password_confirmation">Votre mot de passe :</label><br>
                <input type="password" name="password_confirmation" id="password" value="password_confirmation"/><br>
            <input type="submit" value="Submit"><br>
        </form>
    </body>
</html>