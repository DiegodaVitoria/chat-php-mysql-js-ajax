const pswrdField = document.querySelector(".form .field  input[type='password']");
const toggleBtn = document.querySelector(".form .field i");
//const variavel = pegar no documento as classes e armazenar na variavel

// esse comando é para inibir os caracteres da senha e o olho


// quando clicar no olho mudar o type do html de password para text
toggleBtn.onclick = ()=>{
 if(pswrdField.type == "password"){
  pswrdField.type = "text" ;
  toggleBtn.classList.add("active");
 }else{
  pswrdField.type = "password";
  toggleBtn.classList.remove("active");
 }
}