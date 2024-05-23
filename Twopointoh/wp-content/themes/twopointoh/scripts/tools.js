gsap.registerPlugin(ScrollTrigger);
   
      gsap.to(".post-thumb",{
        duration: 1,
        scrollTrigger:{
          trigger: ".post-thumb",
          start: "top center",
          toggleClass: "big-thumb"
        }
      });

// Hide nav on scroll
let prevScrollPos = window.scrollY;

window.addEventListener('scroll', function() {
  const currentScrollPos = window.scrollY;

  if (prevScrollPos > currentScrollPos) {
 
    document.querySelector('.nav-container').classList.remove('hidenav');
  } else {
    
    document.querySelector('.nav-container').classList.add('hidenav');
  }
  prevScrollPos = currentScrollPos;
});

    

function displayNav(){
  let opnnav = document.getElementById("nav-collapse-mobi");
  let navico = document.getElementById("toggler");
  opnnav.classList.toggle("opened");
  navico.classList.toggle("show-x");
}




 