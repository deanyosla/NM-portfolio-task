const hamburger = document.querySelector('.hamburger');
const menu_nav = document.querySelector('.mobile-nav');
hamburger.addEventListener('click', function () {
    hamburger.classList.add('hamburger--emphatic');
    hamburger.classList.toggle("is-active");
    menu_nav.classList.toggle("is-active");
});




const headerTxt = "Hi, I'm Andrejs Volskis!";
const paraTxt = 'I am an aspiring Web Developer.';
let headerSpeed = 80;
let paraSpeed = 60;
let headerLength = 0;
let paraLength = 0;

function typeWriterHeader() {
    if (headerLength < headerTxt.length) {
        document.getElementById('main').innerHTML += headerTxt.charAt(headerLength);
        headerLength++;
        setTimeout(typeWriterHeader, headerSpeed);
    }
}
function typeWriterPara() {
    if (paraLength < paraTxt.length) {
        document.getElementById('para-text').innerHTML += paraTxt.charAt(paraLength);
        paraLength++;
        setTimeout(typeWriterPara, paraSpeed);
    }
}

function typeWriter() {
    typeWriterHeader();
    setTimeout(typeWriterPara, 3000);
}

typeWriter();