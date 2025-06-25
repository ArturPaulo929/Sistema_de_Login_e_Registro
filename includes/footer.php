        </div>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>

<script>
    // Adicionar este script a ambas as páginas
document.addEventListener('DOMContentLoaded', function() {
  // Adiciona classe para ativar a animação após o carregamento
  setTimeout(() => {
    document.querySelector('form').style.animation = 'none';
    setTimeout(() => {
      document.querySelector('form').style.animation = '';
    }, 10);
  }, 500);
});

// Intercepta cliques em links para transição de saída
document.querySelectorAll('a[href]').forEach(link => {
  link.addEventListener('click', function(e) {
    if (!this.getAttribute('href').startsWith('#') && 
        !this.getAttribute('href').startsWith('http')) {
      e.preventDefault();
      const href = this.getAttribute('href');
      
      // Animação de saída
      document.querySelector('form').style.animation = 'fadeOut 0.5s ease forwards';
      
      setTimeout(() => {
        window.location.href = href;
      }, 500);
    }
  });
});
</script>
