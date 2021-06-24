<?php

// Conexão
include_once 'php/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
?>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/css-cadastro.css">
    <link rel="stylesheet" href="css/estilo.css">	
		   
</head>
<?php
 if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM postagem WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
<body>
         <!--Imagem do peso-->
  







<form action="php/updatepostagens.php" method="POST" class="form-postar" >
       
     <section>

    
        <div class="container">
            <div id="imagem-principal">
                <div class="text-center">
                    <img src="php/foto/img-peso.jpg" class="img-peso img-fluid">
                </div>
            </div>
        </div>
   

   
                        <!--O idacademia é para preencher o campo do update-->
                       <input type="hidden" name="idacademia" value="<?php echo $dados['idacademia'];?>">
					    <!--Id da postagem-->
					   <input type="hidden" name="id" value="<?php echo $dados['id'];?>">



	                   Poste Algo de BOM:    <input type="text" name="textPostar" id="textPostar" min="0" value="<?php echo $dados['mensagem'];?>">      
                       <div class="col-lg-6">
                           <div class="form-group">        
                                  <label class="control-label" for="imagem">
								  <input type="file" class="form-control-file" id="imagem" name="imagem" multiple="true" accept="image/*" enctype="multipart/form-data" value="<?php echo $dados['foto'];?>"></input>
                                
                                  Imagens da academia
                                  </label>
                                

                           </div>
                       </div>
					    <input id="btn-editarpostagens"class="botoes btn"name="btn-editarpostagens" type="submit" value="Editar">
                          
			      </section>
                         <!--Fim do container com todas da informações do cadastro-->

    <footer>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/jquery.mask.min.js"></script>
    </footer>

</body>



