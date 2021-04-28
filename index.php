<?php include_once "header.php";?>
<body>

  <div class="wrapper">
    <section class="form signup">
     <header>Chat app</header>
     <form action="#" enctype="multipart/form-data" autocomplete="off">
      <div class="error-txt"></div>
      <div class="name-details">
       <div class="field input">
        <label>Primeiro Nome</label>
        <input type="text" name="fname" placeholder="Primeiro nome" require>
       </div>
       <div class="field input">
        <label>Sobre Nome</label>
        <input type="text" name="lname" placeholder="Sobre nome" require>
       </div>
      </div>
      <div class="field input">
       <label>Email</label>
       <input type="text" name="email" placeholder="Novo Email" require>
      </div>
      <div class="field input">
       <label>Password</label>
       <input type="password" name="password" placeholder="Password" require>
       <i class="fas fa-eye"></i>
      </div>
      <div class="field image">
       <label>Select Imagem</label>
       <input type="file" name="image" require>

      </div>
      <div class="field button">
       <input type="submit" value="Cadastrar">
      </div>
     </form>
     <div class="link">Já se inscreveu? <a href="login.php">Login agora</a></div>
    </section>
  </div>
  <script src="./script/pass-show-hide.js"></script>
  <script src="./script/signup.js"></script>

</body>
</html>


