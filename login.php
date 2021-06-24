
 

<html>
    <head>
    <title>Linkad</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/estilo.css">

    <!-- Adicionando Javascript -->
   
    </head>

    <body>
    <!-- Inicio do formulario    ''''  o campo que tem o id é o id da academia -->
	  <header>
        <h1>Login</h1>
    </header>
             
	

	  
	  <section>
      <form method="POST" action="php/login.php">
      <!-- <input type="hidden" name="idlogado" value="<//?php $dados['id'];   ?>"-->
	   <label>Login:
        <input name="login" type="text" id="login" size="60"required /></label><br />
        <label>Senha:
        <input name="senha" type="password" id="senha" size="60"required /></label><br />
         <input name="idlogado" type="hidden" id="idlogado" size="60"  value="<?php echo $_GET['id'];?>" /></label><br />
      
	 <input id="btn-cadastrar"class="botoes btn"name="btn-cadastrar" type="submit" value="Logar">
      </form>
	  </section>
	   
	  </body>

    </html>



<?php
// Footer
include_once 'includes/footer.php';

?>