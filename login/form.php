<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>form</title>
</head>
<body>

<div class="box-login">

  <form action="">
    
      <div class="itens">
        <label>Nome</label>
        <input type="text" placeholder="Digite aqui seu nome">
      </div>
    
      <div class="itens">
        <label>Telefone</label>
        <input type="text"  placeholder="(00) 0 0000-0000"  id="telefone" maxlength="11" oninput="mask('Telefone')">
      </div>
      
      <div class="itens">
        <label>Endereço</label>
        <input type="text" placeholder="Digite aqui seu endereço">
      </div>
    
      <div class="itens">
        <label>Cidade</label>
        <input type="text" placeholder="Digite aqui sua cidade">
      </div>

      <div class="itens">
        <label>Email</label>
        <input type="email" placeholder="Digite aqui sua cidade">
      </div>

      <div class="itens">
        <label>Senha</label>
        <input type="password" placeholder="Digite aqui sua cidade">
      </div>
      
      <div class="itens">
          <a class="submit" href="index.php"> 
            <p for="">Voltar</p>
          </a>
        </div>


  </form>
</div>

<script src="mask.js"></script>

</body>
</html>