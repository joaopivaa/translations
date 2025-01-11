//VARIÁVEIS GERAIS
const modal = document.getElementById('word-modal');
const closeModal = document.getElementById('close-modal');
const wordItems = document.querySelectorAll('.word-item');
const modalPalavra = document.getElementById('modal-palavra');
const modalTraducao = document.getElementById('modal-traducao');

//BOTÕES DE LINK PARA ALTERAR E DELETAR PALAVRAS, RESPECTIVAMENTE
const link_alt = document.getElementById("link-alterar");
const link_del = document.getElementById("link-deletar");

//RECEBENDO OS DADOS DA PALAVRA SELECIONADA
wordItems.forEach(item => {
    item.addEventListener('click', () => {
        
        //PEGANDO ID CORRESPONDENTE A PALAVRA SELECIONADA
        link_del.href = `core/word_repositorio.php?acao=delete&id=${item.dataset.id}`;
        link_alt.href = `word_alterar.php?word=${item.dataset.id}`;

        modalPalavra.textContent = item.dataset.palavra;
        modalTraducao.textContent = item.dataset.traducao;
        modal.classList.toggle ("show");
        modal.classList.remove ("hide");
    });
});

//FECHAR O MODAL COM O 'X'
closeModal.addEventListener('click', () => {
    modal.classList.remove ("show");
    modal.classList.toggle ("hide");
});

//FECHAR O MODAL COM CLIQUE NA JANELA
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.classList.remove ("show");
        modal.classList.toggle ("hide");
    }
});

//FECHAR O MODAL PRESSIONANDO A TECLA 'ESC'
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        modal.classList.remove ("show");
        modal.classList.toggle ("hide");
    }
});