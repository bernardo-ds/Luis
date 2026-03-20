<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" href="contato.css">
</head>

<body>

    <header>
        <img src="img/logo.png">
        <nav>
            <a href="comprar.php" class="botao meu-botao">Comprar</a>
            <a href="alugar.php" class="botao meu-botao">Alugar</a>
            <a href="anunciar.php" class="botao meu-botao">Anuncie seu imóvel</a>
            <a href="sobre.php" class="botao meu-botao">Sobre</a>
            <a href="contato.php" class="botao meu-botao">Contato</a>
            <a href="login.php" class="botao meu-botao conta">Faça login</a>
            <a href="cadastro.php" class="botao meu-botao conta">Cadastre-se</a>
        </nav>
    </header>
    <div class="container">
        <h2>Contato</h2>
        <p>Equipe:</p>
        <ul>
            <li>Bernardo</li>
            <li>Arthur</li>
            <li>Enzo</li>
            <li>João</li>
        </ul>
        <form>
            <label>Nome</label><br>
            <input type="text"><br><br>
            <label>Email</label><br>
            <input type="email"><br><br>
            <label>Mensagem</label><br>
            <textarea rows="5"></textarea><br><br>
            <button onclick="alert('Mensagem enviada com sucesso!!')">Enviar</button>
        </form>
    </div>
    <footer>
        <p>Imobiliária John Leitão</p>
    </footer>
</body>

</html>