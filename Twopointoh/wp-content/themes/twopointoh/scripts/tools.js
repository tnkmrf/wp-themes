gsap.registerPlugin(ScrollTrigger);
   
      gsap.to(".post-thumb",{
        duration: 1,
        scrollTrigger:{
          trigger: ".post-thumb",
          start: "top center",
          markers: true,
          toggleClass: "big-thumb"
        }
      })



function displayNav(){
  let opnnav = document.getElementById("nav-collapse-mobi");
  let navico = document.getElementById("toggler");
  opnnav.classList.toggle("opened");
  navico.classList.toggle("show-x");
}

 