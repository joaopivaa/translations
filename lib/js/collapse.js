var btn = document.querySelector('#show') ;

var input = document.querySelector('#hide');

var content = document.querySelector('.content');

var hidden = document.querySelector('.content-hidden');

btn.addEventListener('click', function () {

    if (content.style.display === 'none') 
    {
        content.style.display = 'flex' ;
        hidden.style.display = 'none' ;
    }
    else
    {
        content.style.display = 'flex' ;
        hidden.style.display = 'none' ;
    }
    
});

input.addEventListener('click', function () {

    if(hidden.style.display === 'none')
    {
        hidden.style.display = 'flex' ;
        content.style.display = 'none' ;
    }
    else
    {
        hidden.style.display = 'flex' ;
        content.style.display = 'none' ;
    }
    
});