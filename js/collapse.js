var btn = document.querySelector('#show') ;

var input = document.querySelector('#hide');

var container = document.querySelector('.container');

var display = document.querySelector('.display');

btn.addEventListener('click', function () {

    if (container.style.display === 'none') 
    {
        container.style.display = 'block' ;
        display.style.display = 'none' ;
        
    }
    else
    {
        container.style.display = 'block' ;
        display.style.display = 'none' ;
    }
    
});

input.addEventListener('click', function () {

    if(display.style.display === 'none')
    {
        display.style.display = 'block' ;
        container.style.display = 'none' ;
    }
    else
    {
        display.style.display = 'block' ;
        container.style.display = 'none' ;
    }
    
});