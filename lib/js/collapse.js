// INPUTS
const buttons = {
    1: document.querySelector('#btn-1'),
    2: document.querySelector('#btn-2'),
    3: document.querySelector('#btn-3'),
    4: document.querySelector('#btn-4')
};

// GROUPS
const groups = {
    1: document.querySelector('#group-1'),
    2: document.querySelector('#group-2'),
    3: document.querySelector('#group-3'),
    4: document.querySelector('#group-4'),
};

// Função utilitária para mostrar e ocultar elementos
function updateDisplay(activeIndex) {
    for (let i = 1; i <= 4; i++) {
        const displayStyle = i === activeIndex ? 'block' : 'none';
        const flexDisplay = i === activeIndex ? 'flex' : 'none';
        
        groups[i].style.display = flexDisplay;
        buttons[i].checked = i === activeIndex;
    }
}

// Evento para os botões
Object.keys(buttons).forEach(index => {
    buttons[index].addEventListener('click', () => updateDisplay(Number(index)));
});