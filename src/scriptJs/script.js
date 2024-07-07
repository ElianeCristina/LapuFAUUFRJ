//MENU MOBILE
var btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event){
    if (event.type === 'touchstart')event.preventDefault();
    var nav = document.getElementById('nav');
    nav.classList.toggle('active');
    var active = nav.classList.contains('active');
    event.currentTarget.setAttribute('aria-expanded', 'active');
    if(active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
    } else{
        event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
    }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);



//CARROSSEL

var radio = document.querySelector('.manual-btn');
var cont = 1;

document.getElementById('radio1').checked = true;

setInterval(() => {

    proximaImg()

}, 5000)

function proximaImg(){
    cont++

    if(cont > 4){
        cont=1
    }

    document.getElementById('radio' + cont).checked = true;
}