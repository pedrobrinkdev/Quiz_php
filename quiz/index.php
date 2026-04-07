<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-box">
            <h1>Login</h1>
            <form method="post" action="quiz.php">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <input type="submit" value="> Entrar">
            </form>
        </div>
    </div>
</body>
</html>
