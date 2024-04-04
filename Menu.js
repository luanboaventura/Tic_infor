const menu = document.getElementById('menu')
const btn = document.getElementById('btn-menu') 
menu.addEventListener('click', animar)

function animar() {
  
  menu.classList.toggle('abrir')
  btn.classList.toggle('ativar')
  
}

