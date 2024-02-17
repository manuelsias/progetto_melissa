let links= document.querySelectorAll('.nav-link-custom');

links.forEach((el)=>{

    el.addEventListener('mouseover',()=>{
        el.classList.remove('text-g');
        el.classList.add('text-w');
    })
    el.addEventListener('mouseleave',()=>{
        el.classList.remove('text-w');
        el.classList.add('text-g');
    })
    // el.addEventListener('click',()=>{
    //     el.classList.add('hello');

        
    // })
    



})

// addEventListener('click')
// addEventListener('mouseleave')

