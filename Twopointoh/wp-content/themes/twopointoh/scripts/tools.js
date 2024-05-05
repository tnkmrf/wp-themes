gsap.registerPlugin(ScrollTrigger);
   
      gsap.to(".post-thumb",{
        y:10,
        duration: 3,
        ScrollTrigger:".post-thumb"
      })



function displayNav(){
  let opnnav = document.getElementById("nav-collapse-mobi");
  let navico = document.getElementById("toggler");
  opnnav.classList.toggle("opened");
  navico.classList.toggle("show-x");
}

 