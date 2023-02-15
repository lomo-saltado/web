// // cambiar color navbar

window.addEventListener('scroll', () => {
     document.querySelector('nav').classList.toggle
     ('window-scroll',window.scrollY > 0)
    
 })

// //preguntas

const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
   faq.addEventListener('click', () => {
     faq.classList.toggle('open');

//         //cambiar icono
         const icon = faq.querySelector('.faq_icon i');
        if(icon.className === 'uil uil-plus') {
            icon.className = "uil uil-minus";
        } else {
             icon.className = "uil uil-plus";
         }
     })
 })


//
//nav bar
// const menu = document.querySelector(".nav_menu");
// const menuBtn = document.querySelector("#open-menu-btn");
// const closeBtn = document.querySelector("#close-menu-btn");

// menu.addEventListener('click', () => {
//     menu.style.display = "flex";
//      closeBtn.style.display = "inline-block";
//      menuBtn.style.display = "none";
//  })

//  const closeNav = () => {
//      menu.style.display = "none";
//      closeBtn.style.display = "none";
//      menuBtn.style.display = "inline-block";
//  }
//  closeBtn.addEventListener('click', closeNav)





///

console.clear();

const app = (() => {
  let body;
  let menu;
  let menuItems;

  const init = () => {
    body = document.querySelector('body');
    menu = document.querySelector('.menu-icon');
    menuItems = document.querySelectorAll('.nav__list-item');

    applyListeners();
  };

  const applyListeners = () => {
    menu.addEventListener('click', () => toggleClass(body, 'nav-active'));
  };

  const toggleClass = (element, stringClass) => {
    if (element.classList.contains(stringClass))
    element.classList.remove(stringClass);else

    element.classList.add(stringClass);
  };

  init();
})();