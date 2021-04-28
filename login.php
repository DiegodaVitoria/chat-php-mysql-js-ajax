<?php include_once "header.php";?>
<body>

  <div class="wrapper">
    <section class="form login">
     <header>Chat app</header>
     <form action="#">
      <div class="error-txt"></div>
      <div class="name-details">
      </div>
      <div class="field input">
       <label>Email</label>
       <input type="text" name="email" placeholder="Seu Email">
      </div>
      <div class="field input">
       <label>Password</label>
       <input type="password" name="password" placeholder="Password">
       <i class="fas fa-eye"></i>
      </div>

      <div class="field button">
       <input type="submit" value="Logar">
      </div>
     </form>
     <div class="link">Ainda não se inscreveu? <a href="index.php">Cadastrar agora</a></div>
    </section>
  </div>
  <script src="./script/pass-show-hide.js"></script>
  <script src="./script/login.js"></script>
</body>
</html>