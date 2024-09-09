// INPUTS: Seleciona dinamicamente todos os botões
const buttons = document.querySelectorAll('.group-buttons .radio input');

// GROUPS: Seleciona dinamicamente todos os grupos de list-word
const groups = document.querySelectorAll('.content');

// Função para mostrar e ocultar elementos
function updateDisplay(activeIndex) {
    groups.forEach((group, index) => {
        const displayStyle = index === activeIndex ? 'block' : 'none';
        group.style.display = displayStyle;
    });

    buttons.forEach((button, index) => {
        button.checked = index === activeIndex;
    });
}

// Inicializa com o primeiro grupo visível e o primeiro botão checado
updateDisplay(0);

// Evento para os botões
buttons.forEach((button, index) => {
    button.addEventListener('click', () => updateDisplay(index));
});