<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simula o carregamento do conteúdo
            setTimeout(function() {
                // Carrega o conteúdo da página Retorno.html
                fetch('pages/home.php')
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
                        window.location.href = 'pages/home.php';
                    });
            }, 4500); // Tempo total da animação de carregamento
        });
    </script>