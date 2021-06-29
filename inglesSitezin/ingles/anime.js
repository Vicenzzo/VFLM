const target = document.querySelectorAll('[data-anime]');

function animaScroll(){
    const windowTop = window.pageYOffset + (window.innerHeight * 0.75);
    console.log(windowTop);

    target.forEach(function (elemento){
        let dist = elemento.offsetTop;
        if(windowTop > dist){
            elemento.classList.add('animate');
        }else{
            elemento.classList.remove('animate');
        }

        console.log(dist);
    });

}

animaScroll();



window.addEventListener('scroll', () => {
    animaScroll();
});
