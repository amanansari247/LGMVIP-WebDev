
window.onload=function(){
    burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')

navlist = document.querySelector('.navb')


burger.addEventListener('click', () =>{

 navlist.classList.toggle('v-class');
 navbar.classList.toggle('h-nav');
})
  }

