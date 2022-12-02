<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Código de Verificação</title>
</head>
<body class="background">
  <div>
    <h2 class="auth-title">Código de Verificação</h2>
    <form action="auth.php" method="post">
        <p class="sub-title-auth">Um código de verificação foi enviado ao seu e-mail</p>
        <div class="form">
          <input class="input-form-auth" type="text" name="codigo" id="cod">
          <input class="auth-btn" type="submit" value="Verificar" name="verificar">
        </div>
    </form>
  </div>
</body>
</html>