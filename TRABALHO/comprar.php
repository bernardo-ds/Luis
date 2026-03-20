<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Comprar</title>
    <link rel="stylesheet" href="comprar.css">
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
            <a href="loginphpl" class="botao meu-botao conta">Faça login</a>
            <a href="cadastro.php" class="botao meu-botao conta">Cadastre-se</a>
        </nav>
    </header>
    <div class="hero">
        <div class="search">
            <input type="text" placeholder="Cidade">
            <input type="text" placeholder="Bairro">
            <input type="text" placeholder="Preço">
            <button>Buscar</button>
        </div>
    </div>
    <div class="container">
        <h2>Imóveis para comprar</h2>
        <div class="cards">
            <div class="card">
                <img src="img/casa1.jpg">
                <div class="info">
                    <h3>Casa moderna</h3>
                    <p>3 quartos, garagem e jardim</p>
                    <p><b>R$ 650.000</b></p>
                </div>
            </div>
            <div class="card">
                <img src="img/casa2.jpg">
                <div class="info">
                    <h3>Casa com varanda</h3>
                    <p>4 quartos e vista bonita</p>
                    <p><b>R$ 820.000</b></p>
                </div>
            </div>
            <div class="card">
                <img src="img/casa3.jpg">
                <div class="info">
                    <h3>Casa grande</h3>
                    <p>5 quartos e quintal grande</p>
                    <p><b>R$ 1.200.000</b></p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Imobiliária John Leitão</p>
        <p>Se precisar de ajuda <a href="contato.php">CLIQUE AQUI</a></p>
    </footer>
</body>

</html>