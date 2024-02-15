let links= document.querySelectorAll('.nav-link-custom');

links.forEach((el)=>{

    el.addEventListener('mouseover',()=>{
        el.classList.remove('text-g');
        el.classList.add('text-b');
    })
    el.addEventListener('mouseleave',()=>{
        el.classList.remove('text-b');
        el.classList.add('text-g');
    })



})

// addEventListener('click')
// addEventListener('mouseleave')

