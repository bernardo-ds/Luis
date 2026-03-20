<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Criar conta - John Leitão</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>

    <div class="container">
        <div class="left">
            <h1>John Leitão</h1>
            <p>Crie sua conta para anunciar ou comprar imóveis na JOHN LEITÃO</p>
        </div>
        <div class="right">
            <div class="cadastro-box">
                <h2>Criar conta</h2>
                <form action="processa.php" method="POST">
                    <input type="text" placeholder="Nome" name="nome">
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Senha" name="senha">
                    <input type="password" placeholder="Confirmar senha">
                    <button type="submit">Cadastrar</button>
                </form>
                <p class="login-link">Já tem conta? <a href="login.php">Entrar</a></p>
            </div>
        </div>
    </div>
    <footer>
        <p>Imobiliária John Leitão</p>
    </footer>
</body>
</html>