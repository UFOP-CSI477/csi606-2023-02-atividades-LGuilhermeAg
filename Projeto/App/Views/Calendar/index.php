<?php
    $url = $_SERVER['REQUEST_URI'];
    session_start();
?>
<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Bendita Limpeza</title>
    <link rel="stylesheet" href="../public/CSS/login-style.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">Bendita Limpeza</a>

        <button class="button visivel" id="form-open">Login</button>
        <button class="button" id="btnAcessar" onclick="window.location.href='calendar/calendario'">Acessar calendário</button>
        <button class="button" id="btnSair" onclick="logout()">SAIR</button>
      </nav>
    </header>

    <div class="container">
      <h1>
        Acesse agora nosso calendário de serviços e agende sua limpeza!
      </h1>
    </div>
    
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <div class="form login_form">
          <form action="#">
            <h2>Login</h2>

            <div class="input_box">
              <input type="username" placeholder="Insira seu nome de usuario" id="user" required />
              <i class="uil uil-user-circle email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Insira sua senha" id="pwd" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field" style="display: none;">
              
            </div>

            <button class="button" id="entrar" onclick="login()">Entrar</button>

            <div class="login_signup">Não tem um usuário? <a href="#" id="signup">Crie uma conta</a></div>
          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
          <form action="<?=$url?>/cadastro" method="post">
            <h2>Novo usuário</h2>
            <div class="input_box">
              <input name="username" type="text" id="novoUsername" placeholder="Insira seu nome de usuário" required value="<?php if(isset($_SESSION['error'])) echo $_SESSION['oldUser']['username'];?>" />
              <i class="uil uil-user-circle email"></i>
            </div>
            <div class="input_box">
              <input name="email" type="email" id="novoEmail" placeholder="Insira seu e-mail" required value="<?php if(isset($_SESSION['error']))echo$_SESSION['oldUser']['email'];?>" />
              <i class="uil uil-mail-circle email"></i>
            </div>
            <div class="input_box">
              <input name="pwd1" type="password" placeholder="Crie sua senha" id="pwd1" required value=""/>
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input name="pwd2" type="password" placeholder="Confirme a senha" id="pwd2" required value="" />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button" id="cadastrar" onclick="" type="submit">Cadastrar</button>
          </form>

            

          <div class="login_signup">Já tem um usuário? <a href="#" id="login">Faça log-in</a></div>
        </div>
      </div>
    </section>
    <?php
      if(isset($_SESSION['cadastroMessage'])){
        echo '<script>alert("'.$_SESSION['cadastroMessage'].'")</script>';
        unset($_SESSION['error']);
        unset($_SESSION['cadastroMessage']);
      }
    ?>
    <script src="singleton.js"></script>
    <script src="login-script.js"></script>
  </body>
</html>
