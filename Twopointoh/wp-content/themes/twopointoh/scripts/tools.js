
function displayNav(){
  let opnnav = document.getElementById("nav-collapse-mobi");
  let navico = document.getElementById("toggler");
  opnnav.classList.toggle("opened");
  navico.classList.toggle("show-x");
}

function emailUp(){
  let labelemail = document.getElementById("labelemail");
  let inputemail = document.getElementById("tm-email");
  if (inputemail.value==""){
    labelemail.classList.remove("pop");
  }else{
    labelemail.classList.add("pop");
  }
}

function textUp(){
  let labelText = document.getElementById("labeltext");
  let inputText = document.getElementById("tm-textarea");
  if (inputText.value==""){
    labelText.classList.remove("pop");
  }else{
    labelText.classList.add("pop");
  }
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



 