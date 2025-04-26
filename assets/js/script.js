document.getElementById('signo-form').addEventListener('submit', function(event) {
    let dataNascimento = document.getElementById('data_nascimento').value;
    let myModal = document.getElementById('dataModal');
    let closeModalButtons = document.querySelectorAll('.close');

    if (!dataNascimento) {
      event.preventDefault();

      // Adiciona a classe animeTop e mostra o modal
      myModal.classList.add('animeTop');
      myModal.style.display = 'block';
      myModal.style.opacity = 1;
      myModal.classList.add('show'); // Adiciona a classe 'show' para visibilidade e animação do Bootstrap

      // Atribuindo a funcionalidade de fechamento aos botões
      closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
          myModal.classList.remove('show');
          myModal.style.display = 'none';
          myModal.style.opacity = 0;
          myModal.classList.remove('animeTop'); // Remove a classe animeTop ao fechar
        });
      });
    }
});
