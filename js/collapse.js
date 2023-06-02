var btn = document.querySelector('#show') ;

var input = document.querySelector('#hide');

var sub = document.querySelector('.sub');

var display = document.querySelector('.display');

btn.addEventListener('click', function () {

    if (sub.style.display === 'none') 
    {
        sub.style.display = 'flex' ;
        display.style.display = 'none' ;
        
    }
    else
    {
        sub.style.display = 'flex' ;
        display.style.display = 'none' ;
    }
    
});

input.addEventListener('click', function () {

    if(display.style.display === 'none')
    {
        display.style.display = 'flex' ;
        sub.style.display = 'none' ;
    }
    else
    {
        display.style.display = 'flex' ;
        sub.style.display = 'none' ;
    }
    
});