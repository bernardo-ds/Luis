<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login - John Leitão</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="container">
        <div class="left">
            <h1>John Leitão</h1>
            <p>Encontre casas e apartamentos na nossa imobiliária.</p>
        </div>
        <div class="right">
            <div class="login-box">
                <h2>Entrar</h2>
                <form action="processa.php" method="POST">
                    <input type="text" placeholder="Nome" name="nome">
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Senha" name="senha">
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>Imobiliária John Leitão</p>
    </footer>
</body>
</html>