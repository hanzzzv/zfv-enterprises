const navbar = document.querySelector('.navbar')
const hamburger = document.querySelector('.hamburger')
const navLinks = document.querySelector('.nav-links')
const navLinksLi = document.querySelectorAll('.nav-links li')


window.addEventListener('scroll', () => {
    if(this.scrollY >= 100) {
        navbar.classList.add('scrolled')
    } else {
        navbar.classList.remove('scrolled')
    }
})

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active')
    hamburger.classList.toggle('active')
})

navLinksLi.forEach(li => li.addEventListener('click', ()=> {
    navLinksLi.forEach(li => li.classList.remove('active'))
    li.classList.add('active')

    hamburger.classList.remove('active')
    navLinks.classList.remove('active')

}))

$('.icon').click(function(){
    $('span').toggleClass("cancel");
  });


// Typed js
var options = {
    strings: [
        'Construction?',
        'Hardware Supplies', 
        'Scaffoldings',
        'Plumbings',
        'Roofings',
        'Paints',
        'Electricals',
        'CCTV Installations',
        
    ],
    typeSpeed: 40,
    loop: true,
    loopCount: Infinity,
    typeSpeed: 10,
    backDelay: 2000,
    
  };
  
var typed = new Typed('#hero-titles', options);

// AOS
AOS.init();