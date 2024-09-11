// Seleciona dinamicamente todos os INPUTS adicionados
const buttons = document.querySelectorAll('.group-buttons .radio input');

// Seleciona dinamicamente todos os GRUPOS de palavras adicionados
const groups = document.querySelectorAll('.content');

// Função para mostrar e ocultar as listas
function updateDisplay(activeIndex) {
    groups.forEach((group, index) => {
        const displayStyle = index === activeIndex ? 'block' : 'none';
        group.style.display = displayStyle;
    });

    buttons.forEach((button, index) => {
        button.checked = index === activeIndex;
    });
}

// Função para o primeiro grupo ser inicialmente visível, com o primeiro botão checado
updateDisplay(0);

// Evento para os botões
buttons.forEach((button, index) => {
    button.addEventListener('click', () => updateDisplay(index));
});