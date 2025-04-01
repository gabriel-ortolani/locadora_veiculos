<?php
//backend
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login</title>
    <style>

    </style>
</head>
<body class="bg-light">
    <div class="login-container">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-1">Login</h4>
            </div>

            <div class="card-body">
                <form action="post" class="needs-validation" novalidate>
                    <label for="">Email:</label><br>
                    <input type="text" placeholder="Digite seu Email"><br>
                    <label for="">Senha:</label><br>
                    <input type="password" placeholder="Digite sua senha"><br>
                    <button type="submit" class="btn">Entrar</button><br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
