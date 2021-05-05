const form = document.querySelector(".signup form"),
 continueBtn = form.querySelector(".button input"),
 errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
 e.preventDefault(); //impedindo o envio do formulário
}

continueBtn.onclick = () => {
 //começando o Ajax
 let xhr = new XMLHttpRequest(); // criando objeto XML
 xhr.open("POST", "php/signup.php", true);
 xhr.onload = () => {
  if (xhr.readyState === XMLHttpRequest.DONE) {
   if (xhr.status === 200) {
    let data = xhr.response;
    if (data === "success") {
     location.href = "users.php";
    } else {
     errorText.style.display = "block";
     errorText.textContent = data;
    }
   }
  }
 }
 // temos que enviar os dados do formulário através de ajax para php
 let formData = new FormData(form); // criando novo FormData objeto
 xhr.send(formData); // enviando os dados do formulario para  o php
}



