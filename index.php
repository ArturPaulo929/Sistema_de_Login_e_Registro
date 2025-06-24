<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaborSync - Carregando</title>
    <style>
        
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body >
    <!-- Tela de carregamento -->
    <div class="loading-screen" id="loadingScreen">
        <div class="logo-container">
            <div class="logo"></div>
            <div class="logo-glow"></div>
        </div>
        <h1 class="app-name">Sabor<span>Sync</span></h1>
        <p class="subtitle">Sua plataforma premium para gestão gastronômica integrada</p>
        <div class="loading-bar-container">
            <div class="loading-bar"></div>
        </div>
        <div class="loading-text">Inicializando sistema...</div>
    </div>

    <!-- Conteúdo principal (inicialmente oculto) -->
    <div id="content">
        <!-- O conteúdo de Retorno.html será carregado aqui -->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simula o carregamento do conteúdo
            setTimeout(function() {
                // Carrega o conteúdo da página Retorno.html
                fetch('./Retorno.php')
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('content').innerHTML = html;
                        
                        // Animação de transição
                        const loadingScreen = document.getElementById('loadingScreen');
                        const content = document.getElementById('content');
                        
                        // 1. Esmaece a tela de carregamento
                        loadingScreen.style.opacity = '0';
                        loadingScreen.style.transform = 'translateY(-20px)';
                        
                        // 2. Mostra o conteúdo principal com fade-in
                        setTimeout(() => {
                            loadingScreen.style.display = 'none';
                            content.style.display = 'block';
                            
                            setTimeout(() => {
                                content.style.opacity = '1';
                            }, 50);
                        }, 800);
                    })
                    .catch(error => {
                        console.error('Erro ao carregar a página:', error);
                        // Fallback para redirecionamento tradicional
                        window.location.href = './Retorno.php';
                    });
            }, 3500); // Tempo total da animação de carregamento
        });
    </script>
</body>
</html>