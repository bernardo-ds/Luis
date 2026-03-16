<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - GlobalStay</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>GlobalStay: Hospedagem Internacional</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="destinos.php">Destinos</a>
            <a href="requisitos.php">Requisitos</a>
            <a href="reserva.php">Reservar</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>

    <main>
        <section class="hero" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
            <h1>Fale Conosco</h1>
            <p>Estamos aqui para ajudar em sua próxima viagem</p>
        </section>

        <section class="conteudo" style="max-width:700px; margin:0 auto;">
            <div class="formulario_reserva">
                <h2 style="text-align:center;">Envie sua mensagem</h2>
                <div class="campo_grupo">
                    <label>Seu nome:</label>
                    <input type="text" name="nome">
                </div>
                <div class="campo_grupo">
                    <label>Email:</label>
                    <input type="email" name="email">
                </div>
                <div class="campo_grupo">
                    <label>Mensagem:</label>
                    <textarea name="mensagem" rows="6"></textarea>
                </div>
                <button onclick="alert('Mensagem enviada! Em breve entraremos em contato.')" style="width:100%; padding:16px; font-size:1.2rem;">Enviar Mensagem</button>
            </div>

            <div style="text-align:center; margin-top:50px;">
                <p>Ou envie email direto para: contato@globalstay.com</p>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2026 GlobalStay - Hospedagem Internacional. Todos os direitos reservados.</p>
        <p>
            <a href="#">Termos de Uso</a> |
            <a href="#">Política de Privacidade</a> |
            <a href="#">Política de Cancelamento</a>
        </p>
    </footer>
</body>
</html>