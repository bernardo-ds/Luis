<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requisitos - GlobalStay</title>
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
        <section class="hero" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; min-height:50vh;">
            <h1>Viaje Tranquilo: Requisitos Claros</h1>
            <p>Documentos validados antes da reserva – sem surpresas</p>
        </section>

        <section class="conteudo">
            <div style="text-align: center; margin-bottom: 40px;">
                <h2>Requisitos para Entrada nos Destinos</h2>
                <p style="max-width: 700px; margin: 20px auto;">Nossa equipe verifica tudo para você. Veja abaixo os principais requisitos atualizados.</p>
                
                <img src="https://cdn-icons-png.flaticon.com/512/3144/3144456.png" 
                     alt="Ícone de vacina para viagem" 
                     style="width: 120px; height: auto; margin: 20px 0; filter: brightness(0.9);">
            </div>

            <table>
                <tr>
                    <th>País</th>
                    <th>Visto</th>
                    <th>Vacinas</th>
                    <th>Seguro</th>
                </tr>
                <tr>
                    <td>Japão</td>
                    <td>Isento</td>
                    <td>Nenhuma</td>
                    <td>Recomendado</td>
                </tr>
                <tr>
                    <td>França</td>
                    <td>Isento</td>
                    <td>Covid19</td>
                    <td>Obrigatório</td>
                </tr>
            </table>

            <div style="text-align:center; margin: 60px 0;">
                <h3>Precisa de ajuda com vacinas ou documentos?</h3>
                <p>Envie sua solicitação e nós orientamos tudo.</p>
                <a href="reserva.php" class="cta-btn">Iniciar Reserva com Verificação</a>
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