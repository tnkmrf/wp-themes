
function displayNav(){
  let opnnav = document.getElementById("nav-collapse-mobi");
  let navico = document.getElementById("toggler");
  opnnav.classList.toggle("opened");
  navico.classList.toggle("show-x");
}


gsap.registerPlugin(ScrollTrigger);
   
      gsap.to(".post-thumb",{
        duration: 1,
        scrollTrigger:{
          trigger: ".post-thumb",
          start: "top center",
          toggleClass: "big-thumb",
        
        }
      });



   
//Hide nav on scroll
showAnim = gsap.from('.nav-container', { 
  yPercent: -100,
  paused: true,
  duration: 0.2
}).progress(1);

ScrollTrigger.create({
  start: "top top",
  end: "max",
  onUpdate: (self) => {
    self.direction === -1 ? showAnim.play() : showAnim.reverse()
  }
});



 