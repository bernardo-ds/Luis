<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar - GlobalStay</title>
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
        <section class="hero" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
            <h1>Reserve com Segurança</h1>
            <p>Preencha os dados e nossa equipe valida tudo em até 24h</p>
        </section>

        <sectio n class="conteudo">
            <div class="formulario_reserva" style="max-width:600px; margin:0 auto;">
                <h2 style="text-align:center;">Solicitar Reserva</h2>
                <form action="processa.php" method="POST">
                    <div class="campo_grupo">
                        <label>Nome completo:</label>
                        <input type="text" name="nome_completo" required>
                    </div>
                    <div class="campo_grupo">
                        <label>Email:</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="campo_grupo">
                        <label>Passaporte (número):</label>
                        <input type="text" name="passaporte" required>
                    </div>
                    <div class="campo_grupo">
                        <label>Destino desejado:</label>
                        <select name="destino" required>
                            <option value="">Selecione...</option>
                            <option value="japao">Japão</option>
                            <option value="franca">França</option>
                            <option value="eua">Estados Unidos</option>
                        </select>
                    </div>
                    <div class="campo_grupo">
                        <label>Data aproximada da viagem:</label>
                        <input type="date" name="data_viagem">
                    </div>
                    <button type="submit" style="width:100%; padding:16px; font-size:1.2rem;">Enviar Solicitação</button>
                </form>
            </div>

            <div style="text-align:center; margin-top:50px;">
                <p>Após envio, você receberá confirmação e instruções por e-mail.</p>
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