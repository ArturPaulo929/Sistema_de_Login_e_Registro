<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simula um tempo de carregamento (opcional)
    setTimeout(function() {
        // Faz a requisição para home.php
        fetch('home.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro ao carregar o conteúdo');
                }
                return response.text();
            })
            .then(html => {
                // Insere o conteúdo na div #content
                const contentDiv = document.getElementById('content');
                contentDiv.innerHTML = html;

                // Animação de transição (opcional)
                const loadingScreen = document.getElementById('loadingScreen');
                if (loadingScreen) {
                    loadingScreen.style.opacity = '0';
                    loadingScreen.style.transform = 'translateY(-20px)';
                    
                    setTimeout(() => {
                        loadingScreen.style.display = 'none';
                        contentDiv.style.display = 'block';
                        setTimeout(() => {
                            contentDiv.style.opacity = '1';
                        }, 50);
                    }, 800);
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                // Se der erro, mostra uma mensagem ou faz fallback
                document.getElementById('content').innerHTML = `
                    <div class="alert alert-danger">
                        Não foi possível carregar o conteúdo. <a href="pages/home.php">Tente novamente</a>.
                    </div>
                `;
            });
    }, 100); // Tempo simulado de carregamento (opcional)
});
</script>