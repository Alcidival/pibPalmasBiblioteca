<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <title>Login</title>
    <style>
        body {
            background-color: #708090; /* Cor de fundo desejada */
        }

        .login-container {
            /*margin-top: 100px; /* Ajusta a margem superior para centralizar na página */
            height: 100vh; /* 100% da altura da tela */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            width: 20rem; /* Largura desejada para o card */ 
        }
        .logo-container {
            width: 200px; /* Largura desejada para a imagem */
            margin: 0 auto; /* Centraliza a imagem horizontalmente */
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="card">
            <!-- Adicione a logo aqui -->
            <div class="card-header text-center">
                <div class="logo-container">
                    <img src="img/logo.png" alt="Logo" class="img-fluid">
                </div>
            </div>
            <div class="card-body">
                <form action="pages/login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
