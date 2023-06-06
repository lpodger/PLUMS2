const clickx= document.getElementById('pencet');
const nav= document.querySelector('nav');

clickx.addEventListener('click', function(){
  clickx.classList.toggle('Diam');
    nav.classList.toggle('show');
  
});
