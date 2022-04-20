/********SWIPER*******/
const swiper = new Swiper('.swiper', {

    loop: true,

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  /********FIN SWIPER*******/ 



// Selection des objets
const burger = document.querySelector('.burger i');
const nav_active = document.querySelector('.nav-active');

const lightButton = document.querySelector('.lightmode');
const body = document.querySelector('.dark');

const displayProfil = document.querySelector('#Profil');
const displayPortfolio = document.querySelector('#Portfolio');
const displayContact = document.querySelector('#Contacts');
const profil = document.querySelector('#mProfil');
const portfolio = document.querySelector('#mPortfolio');
const contact = document.querySelector('#mContacts');

const span_active = document.querySelector('.start_span_active');

// Fonctions
function toggleNav() {
    burger.classList.toggle('fa-caret-right');
    burger.classList.toggle('fa-caret-left');
    nav_active.classList.toggle('nav');
}

function toggleDisplayPortfolio() {
        if (displayPortfolio.className == 'hidden') {
            displayPortfolio.classList.replace('hidden', 'active');
            if (displayProfil.className == 'active') { 
                displayProfil.classList.replace('active', 'hidden');
            } else {
                displayContact.classList.replace('active', 'hidden');
            }
        }
}

function toggleDisplayProfil() {
    if (displayProfil.className == 'hidden') {
        displayProfil.classList.replace('hidden', 'active');
        if (displayContact.className=="active") {
            displayContact.classList.replace('active', 'hidden');
        } else {
            displayPortfolio.classList.replace('active', 'hidden');
        }
    }
}

function toggleDisplayContacts() {
    if (displayContact.className == 'hidden') {
        displayContact.classList.replace('hidden', 'active');
        if (displayPortfolio.className == 'active') {
            displayPortfolio.classList.replace('active', 'hidden');
        } else {
            displayProfil.classList.replace('active', 'hidden');
        }
    }
}

/*function auto_effect() {
    if(span_active.className == 'start_span_active') {
        span_active.classList.toggle('start_span');
        span_active.classList.toggle('start_span_active');
    } else if (span_active.className == 'start_span') {
        span_active.classList.toggle('start_span');
        span_active.classList.toggle('start_span_active');
    }
}*/

function toggleLightMode() {
    body.classList.toggle('dark');
    body.classList.toggle('light');
}


// Appel  à la fct après le clic
burger.addEventListener('click', function() {
    toggleNav();
});

portfolio.addEventListener('click', function() {
    toggleDisplayPortfolio();
});

profil.addEventListener('click', function() {
    toggleDisplayProfil();
});

contact.addEventListener('click', function() {
    toggleDisplayContacts();
});

lightButton.addEventListener('click', function() {
    toggleLightMode();
});
/*console.log(setInterval(auto_effect, 500));*/