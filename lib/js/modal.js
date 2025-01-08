const modal = document.getElementById('word-modal');
const closeModal = document.getElementById('close-modal');
const wordItems = document.querySelectorAll('.word-item');
const modalPalavra = document.getElementById('modal-palavra');
const modalTraducao = document.getElementById('modal-traducao');

wordItems.forEach(item => {
    item.addEventListener('click', () => {
        modalPalavra.textContent = item.dataset.palavra;
        modalTraducao.textContent = item.dataset.traducao;
        modal.classList.toggle ("show");
        modal.classList.remove ("hide");
    });
});

closeModal.addEventListener('click', () => {
    modal.classList.remove ("show");
    modal.classList.toggle ("hide");
});

window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.classList.remove ("show");
        modal.classList.toggle ("hide");
    }
});

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        modal.classList.remove ("show");
        modal.classList.toggle ("hide");
    }
});