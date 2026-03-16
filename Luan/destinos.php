<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinos - GlobalStay</title>
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
        <section class="hero" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1502602898657-3e91760cbb34?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
            <h1>Nossos Destinos Imperdíveis</h1>
            <p>Hotéis verificados em locais incríveis — prontos para sua próxima viagem</p>
            <a href="reserva.php" class="cta-btn">Reservar Agora</a>
        </section>

        <section class="conteudo">
            <div class="grade_destinos">
                <div class="cartao">
                    <img src="https://m.media-amazon.com/images/I/61vmomQmrhS._AC_UF894,1000_QL80_.jpg" alt="Tóquio à noite">
                    <h3>Tóquio, Japão</h3>
                    <p>Hotel Shinjuku Center – a partir de US$ 120/noite</p>
                    <p class="destaque">Cultura vibrante + tecnologia de ponta</p>
                    <a href="reserva.php"><button>Reservar</button></a>
                </div>

                <div class="cartao">
                    <img src="https://m.media-amazon.com/images/I/71RC1ok8g6L._AC_UF894,1000_QL80_.jpg" alt="Paris ao pôr do sol">
                    <h3>Paris, França</h3>
                    <p>L'Opera Residence – a partir de € 150/noite</p>
                    <p class="destaque">Romantismo e gastronomia inigualáveis</p>
                    <a href="reserva.php"><button>Reservar</button></a>
                </div>

                <div class="cartao">
                    <img src="https://as2.ftcdn.net/jpg/01/78/78/77/1000_F_178787786_YO7euTG2Sy7cRY8nWaJv89wvTJbcxVTL.jpg" alt="Nova York skyline">
                    <h3>Nova York, EUA</h3>
                    <p>Manhattan Suites – a partir de US$ 210/noite</p>
                    <p class="destaque">Energia sem fim + experiências únicas</p>
                    <a href="reserva.php"><button>Reservar</button></a>
                </div>
            </div>

            <div style="text-align:center; margin-top:60px;">
                <h2>Quer mais opções?</h2>
                <p>Estamos adicionando novos destinos todos os meses.</p>
                <a href="contato.php" class="cta-btn">Fale conosco e peça sugestões</a>
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