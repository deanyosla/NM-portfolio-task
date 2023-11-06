const hamburger = document.querySelector('.hamburger');
const menu_nav = document.querySelector('.mobile-nav');
hamburger.addEventListener('click', function () {
    hamburger.classList.add('hamburger--emphatic');
    hamburger.classList.toggle("is-active");
    menu_nav.classList.toggle("is-active");
});

// const headertxt = document.querySelector('.h1-text');
// const characters = headertxt.innerHTML.split('');
//       headertxt.innerHTML = '';
//       characters.forEach((character, index) => {
//         setTimeout(() => {
//       headertxt.innerHTML += character;
//   }, 100 * index);
// });

// const paragraph = document.querySelector('.p-text');
// const chara = paragraph.innerHTML.split('');
//         paragraph.innerHTML = '';
//         chara.forEach((character, index) => {
//             setTimeout(() => {
//                 paragraph.innerHTML += character;
//             }, 200 * index);
//         });

const headerTxt = "Hi, I'm Andrejs Volskis!";
const paraTxt = 'I am an aspiring web developer.';
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

// $('.project-card').slick({
//     arrows: false,
//     dots: false,
//     adaptiveHeight: true,
//     adaptiveWidth: true,
//     autoplay: true,
//     autoplaySpeed: 2000,
//     pauseOnFocus: true,
//     slidesToShow: 1,
//     mobileFirst: true,
//     responsive: [
     
//       {
//         breakpoint: 768,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 2
//         }
//       },
//       {
//         breakpoint: 480,
//         settings: {
//           arrows: false,
//           centerMode: true,
//           centerPadding: '40px',
//           slidesToShow: 1
//         }
//       },
//       {
//         breakpoint: 1200,
//         settings: {
//             arrows: false,
//             dots: true,
//             adaptiveHeight: true,
//             adaptiveWidth: true,
//             slidesToShow: 3,
//             slidesToScroll: 1
//         }
//       }
//     ]
//   });