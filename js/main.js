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

// // character counter vars 
// let textArea = document.getElementById('message');
// let characterCounter = document.getElementById('char-count');

// //form vars

// const emailFormat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
// const email = document.getElementById('email');

// //counter function 

// const countCharacters = () => {
//     let numberOfEnteredChars = textArea.value.length;
//     let counter = numberOfEnteredChars;
//     if(numberOfEnteredChars <= 40) {
//         characterCounter.textContent = counter + '/40';
//         characterCounter.style.color = 'red';
//     } else {
//         characterCounter.textContent = counter + '/40';
//         characterCounter.style.color = '#24d36e';
//     }
//     (this).addEventListener("submit", function(){
//         characterCounter.textContent = '';
//     });
// };

// textArea.addEventListener("input", countCharacters);

// // form function 

// function validateForm() {
//     let fields = [document.getElementById('fname'), 
//                     document.getElementById('lname'),
//                     document.getElementById('email'),
//                     document.getElementById('subject'),
//                     document.getElementById('message')
//                     ];

//     let err = 0;
//     for (var i = 0; i < fields.length; i++) {
//         if(fields[i].value == "") {
//             err++
//             fields[i].style.border = '1px solid red';
//             fields[i].style.boxShadow = '0 0 20px red';
//         } else {
//             fields[i].style.boxShadow = '';
//             fields[i].style.border = '';
//         }
//     }

    
//     if(!emailFormat.test(email.value)) {
//         err + 1;
//         fields[2].style.border = '1px solid red';
//         fields[2].style.boxShadow = '0 0 20px red';
//         return false;
//     } else {
//         fields[2].style.border = '';
//         fields[2].style.boxShadow = '';
//     }

//     if (err === 0) {
//         // success.innerHTML = 'Submit Successful';
//         success.style.color = '#24d36e';
//         console.log('form success');
//     } else {
//         success.innerHTML = 'Fill Out Form Correctly';
//         success.style.color = 'red';
//         console.log('form failed');
//         return false;
//     }

//     return true;
// }

