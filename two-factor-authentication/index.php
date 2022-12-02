<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
    <script src="script/validator.js"></script>
</head>
<body class="background">
  <div class="border">
    <h1 class="title">Login</h1>
    <div class="content">
      <form class="form" name="formphp" action="auth.php" method="post">
      <span style="padding-right: 7px;" class="sub-title">Nome:</span>  
        <input class="input-form" type="text" id="nome" name="nome">
      <span class="sub-title">Senha:</span> 
        <input class="input-form" type="password" id="senha" name="senha"> 
      <span class="sub-title">E-mail:</span>
        <input class="input-form" type="email" name="email">
          <div class="content">
            <input class="btn" type="submit" value="Enviar" name="enviar" onclick="validar()">
          </div>  
        </form>
    </div>
  </div>
</body>
</html>