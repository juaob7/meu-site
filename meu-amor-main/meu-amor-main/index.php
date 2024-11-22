<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosso Amor</title>
    <link rel="icon" href="lj.jpg" type="image/png">
    <link rel="stylesheet" href="index.css">
    <!-- Adicionando a fonte "Dancing Script" do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="image-container">
        <h1><b>Gabriel e Luana</b></h1>
            <img src="mor.jpg" alt="Foto de nós dois">
        </div>
        <div class="text-content">
            <!-- Nome do casal com fonte estilizada -->

            <p>Luana, quero que saiba o quanto você é importante para mim e o quanto eu admiro cada pedacinho da pessoa incrível que você é.
                 Seu jeito único, sua dedicação, Eu tenho um orgulho enorme de te ter ao meu lado, e sou grato por cada momento que compartilhamos. Você é meu porto seguro, 
                minha maior inspiração e o amor da minha vida. Te amo mais do que palavras podem expressar!</p>

            <!-- Exibição do tempo atualizado -->
            <p id="timer"></p>

            <!-- Player de música -->
            <div class="audio-player">
            <audio controls>
                     <source src="sua-musica.mp3" type="audio/mp3">
                     <source src="sua-musica.ogg" type="audio/ogg">
                     Seu navegador não suporta a tag de áudio.
            </audio>

            </div>
        </div>
    </div>

    <script>
        // Data de início do relacionamento
        const startDate = new Date("2022-06-12T00:00:00");

        function updateTimer() {
            const now = new Date();
            const diff = new Date(now - startDate);

            // Cálculos do tempo decorrido
            const years = diff.getUTCFullYear() - 1970;
            const months = diff.getUTCMonth();
            const days = diff.getUTCDate() - 1;
            const hours = diff.getUTCHours();
            const minutes = diff.getUTCMinutes();
            const seconds = diff.getUTCSeconds();

            // Atualizando o conteúdo do timer
            document.getElementById("timer").innerHTML = `
                Estamos juntos há: 
                <b>${years}</b> anos, 
                <b>${months}</b> meses, 
                <b>${days}</b> dias, 
                <b>${hours}</b> horas, 
                <b>${minutes}</b> minutos e 
                <b>${seconds}</b> segundos.
            `;
        }

        setInterval(updateTimer, 1000);
        updateTimer();
    </script>
</body>
</html>
