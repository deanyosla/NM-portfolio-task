const hamburger = document.querySelector('.hamburger');
const menu_nav = document.querySelector('.mobile-nav');
hamburger.addEventListener('click', function () {
    hamburger.classList.add('hamburger--emphatic');
    hamburger.classList.toggle("is-active");
    menu_nav.classList.toggle("is-active");
});


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