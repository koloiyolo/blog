<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="actions/register/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>

    <div class="loginCard">
        <form action="actions/login/controller.php" method="POST" id="registerForm">
            <label>Login Page</label>
            <br>
            <br>
            <input type="text" placeholder="Your name" required>
            <br>
            <input type="text" placeholder="Your surname" required>
            <br>
            <input type="email" placeholder="Your email" required>
            <br>
            <input type="password" placeholder="Your password" required>
            <br>
            <input type="submit" value="Log in">
        </form>
    </div>
</body>

</html>