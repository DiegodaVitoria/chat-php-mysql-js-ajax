const searchBar = document.querySelector(".users .search input");
const searchBtn = document.querySelector(".users .search button");


// esse comando é para aparecer e mudar a cor da barra de busca de usuario
searchBtn.onclick = ()=>{
 searchBar.classList.toggle("active");
 searchBar.focus();
 searchBtn.classList.toggle("active");
}