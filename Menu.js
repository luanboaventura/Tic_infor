const menu = document.getElementById('menu')
const btn = document.getElementById('btn-menu') 
const blog = document.getElementById('blog') 


function animar() {
  
  menu.classList.toggle('abrir')
  btn.classList.toggle('ativar')
  
}

function m_abrir(){
  if(blog.style.display == "block"){
    blog.style.display = "none"
  }
else {
  blog.style.display = "block"
}
}
