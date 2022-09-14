<?php 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	
	<div class="box-login">
  
    <form action="" method="$_POST"> 

      <h1> Login </h1>

        <div class="itens">
          <label>E-mail:</label>
          <input type="email" placeholder="Digite aqui seu e-mail" required>
        </div>
      
        <div class="itens">
          <label>Senha:</label>
          <input type="password" placeholder="*********" required>
        </div>
      
        <div class="itens">
          <a class="submit" href="form.php"> 
            <button>
            <p for="" id="entrar" data-bs-toggle="modal" data-bs-target="#exampleModal" >Entre</p>
            </button>
          </a>
        </div>
        
       

        <div class="itens">
          <a class="submit" href="form.php"> 
            
            <p for="" >Cadastre-se</p>
            
          </a>
        </div>

        
      
  </form>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                       <!--  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            
                        </button> -->
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="">
                       <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button> -->
                    </div>
                </div>
            </div>
        </div>

<script src="val.js"></script>

</body>
</html>