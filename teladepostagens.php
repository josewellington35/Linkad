
 <?php
   include_once 'php/db_connect.php';

   include_once 'includes/header.php';
 
   include_once 'includes/message.php';
  
  // Esse código controla todos os campos apartir da pessoa que está logado
   $verificador = 0;
   $controlador = 'disabled';
   $controladorclientes ='disabled';

    
	$idpermantente =  $_GET['id'];
	$idlogado =  $_GET['idlogado'];
	 
	 
	 if ($idpermantente == $idlogado ) {
	 $controlador = '  ';
      }
	 if($idlogado != 0){
	  $controladorclientes = '  ';
	  }
	 ?>


   
<html  xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Procure seu Endereço</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <!-- styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
  <!--Internet-->
                               
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
 
 <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/css-cadastro.css">




	
  <!--<link rel="stylesheet" href="css/estilo.css">
   <link rel="stylesheet" href="css/css-cadastro.css">
	
 <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	 <script src="postagem.js"></script>-->
   </head>

    <body>
    <!-- Inicio do formulario    ''''  o campo que tem o id é o id da academia -->
	  <header>
      
    </header>
	
	   <div class="row">
        <div class="span12">
          <ul class="filter">
             <a href="infoacademia.php?id=<?php echo $_GET['id'];?>&idlogado=<?php echo  $_GET['idlogado']; ?>" class="btn btn-color">Academia</a>
             <a href="telaenderecos.php?id=<?php echo $_GET['id'];?>&idlogado=<?php echo  $_GET['idlogado']; ?>" class="btn btn-color">Enderecos</a>
             <a href="index.php?id=<?php echo $_GET['id'];?>&idlogado=<?php echo  $_GET['idlogado']; ?>" <?php echo $controlador?> class="btn btn-color">Config</a>
	         <a href="Home.php?id=<?php echo $_GET['id'];?>&idlogado=<?php echo  $_GET['idlogado']; ?>" class="btn btn-color">Home</a>
		   </ul>
        </div>
      </div>
	   
        <div class="container">
            <div id="imagem-principal">
                <div class="text-center">
                    <img src="php/foto/img-peso.jpg" class="img-peso img-fluid">
                </div>
            </div>
        </div>
  
	 <form method="POST" action="php/postar_upload.php?id=<?php echo $_GET['id'];?> &idlogado=<?php echo $_GET['idlogado'];?> " enctype="multipart/form-data">

	   <section id="maincontent">                                           
	   <div class="container">
	   
	   
	   </div>
	  Poste Algo de Bom...
	 <input name="txtidlogado" type="hidden" id="txtidlogado" value="<?php echo $_GET['id'];?>" ><br><br>
	            
	Texto:<textarea rows="1" class="input-block-level"id="txtPostar"name="txtPostar" placeholder="Seu comentario aqui"></textarea>
	Imagem: <input name="arquivo" id="arquivo" type="file" ><br><br>


      

	


	
	<input type="submit"class="btn blue modal-trigger"name="btn-postar"id="btn-postar" value="Pronto" <?php echo $controlador?> >
       
	   </form>
		
	  </section>

	  


				
				
              

			


	   <!--Esse Campo Trás todas as postagens, Dados da academia,comentarios com um inner join-->

	            <?php

		
               //$sql = "SELECT cadastroacademia.nomeacademia,cadastroacademia.site,cadastroacademia.email, 
			   //               postagem.id, postagem.foto,postagem.mensagem,postagem.idacademia 
				//			  FROM cadastroacademia, postagem WHERE cadastroacademia.id = postagem.idacademia
				//			  ORDER by postagem.id DESC  ";
				//$resultado = mysqli_query($connect, $sql);
              
              //  if(mysqli_num_rows($resultado) > 0):

				//while($dados = mysqli_fetch_array($resultado)):
				
				if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	 $sql = "SELECT * FROM cadastroacademia, postagem WHERE cadastroacademia.id =
	$id and postagem.idacademia = $id ORDER by postagem.id DESC  ";
	$resultado = mysqli_query($connect, $sql);
	 if(mysqli_num_rows($resultado) > 0):
    while($dados = mysqli_fetch_array($resultado)):
	
?>
           
			



				 <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <article>
            <div class="heading">
			<div class="span4">
                <div class="">
                 <!-- <h4><i class="icon-48 icon-beaker"></i> Project info</h4>-->
                  <ul class="project-detail">
                    <li><label> <h4><?php echo $dados['mensagem']; ?></h4></label></li>
               
                    <!--   <li><label>Saiba Mais :</label><a href="infoacademia.php?id=<?php echo $dados['idacademia']; ?>&idlogado=<?php echo  $_GET['idlogado']; ?>"><button type="button" class="btn blue modal-trigger" data-complete-text="finished!" >Aqui</button> <script> $('.btn').button('complete') </script></a></li>
-->
                  </ul>
                </div>
              </div>
             
            </div>
            <div class="clearfix">
            </div>
            <div class="row">
              <div class="span8">
                <!-- start flexslider -->
                <div class="flexslider">
                  <ul class="">
                    <li>
				
				
				  	 <!--Esse Campo Trás o nome e a foto de perfil-->
		
				<!--Fim do SELECT-->

				<!--<a  class="pull-left" href="#">
				<!--<img class="media-object" <?php // echo "<img src= php/foto/" . $dados['foto']. ">";  ?>>            <!--src="assets/img/small-avatar.png"-->
				<!--</a>
				<div class="media-body"></div>
				<h5 class="media-heading">nome</h5>
				<span>Data</span>-->
				
				
				

				  <tr>
				
				    <!--Esse código tem que ser alterado quando a tela de login estiver pronta-->
					<td><?php echo $dados['idacademia']; ?></td>
					<!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
                    <!--Postando a imagens na tela-->
		            <div id="res">
				    
               
				 
					  <li>
					<?php 
				
				    echo  $dados['foto'];
				    echo "<img src= php/foto/" . $dados['foto']. ">";  ?>
				   </li>
				    </ul>
                </div>
			       <!--Imagens....-->
                   <!-------  aqui o java insere as imagens ----->
                   <!--<img id="imagem" src = "Imagens\indice.jpg" alt="Sua Aventura">-->
		           </div>
				     <p>
                   <div id="msg">
				   <td></td>
                   <!-- Mensagem....-->
		           </div>
				    </p>
					 </div>
				   <!--Fim-->
				   <td><a href="editarpostagens.php?id=<?php echo $dados['id']; ?>" <?php echo $controlador?> class="btn-floating orange"><i class="material-icons">edit</i></a></td>
					
				   <td><a href="#modal<?php echo $dados['id']; ?>" <?php echo $controlador?> class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
				   <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir essa publicação?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php/deletepostasgem.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletarpostagens" class="btn red">Sim, quero deletar</button>

					      	 <a href="teladepostagens.php" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
				


				  
			


				<div class="span4">
                <div class="project-widget">
                 <!-- <h4><i class="icon-48 icon-beaker"></i> Project info</h4>-->
                  <ul class="project-detail">
                    <li><label>Nome :</label> <?php echo $dados['nomeacademia']; ?></li>
                    <li><label>Site :</label><?php echo $dados['site']; ?></li>
                    <li><label> Email :</label><?php echo $dados['email']; ?></li>
                    <!--   <li><label>Saiba Mais :</label><a href="infoacademia.php?id=<?php echo $dados['idacademia']; ?>&idlogado=<?php echo  $_GET['idlogado']; ?>"><button type="button" class="btn blue modal-trigger" data-complete-text="finished!" >Aqui</button> <script> $('.btn').button('complete') </script></a></li>
-->
                  </ul>
                </div>
              </div>
            </div>
          </article>
		  <!--Campo de comentarios-->
		   <form action="php/comentarios.php?id=<?php echo $_GET['id'];?> &idlogado=<?php echo $_GET['idlogado'];?>  " method="POST">
		   <div class="span8">
		   	 <input name="txtidlogado" type="hidden" id="txtidlogado" value="<?php echo $_GET['idlogado'];?>" ><br><br>
                  <label>Comente <span>*</span></label>
				  <input type="hidden" name="idusuario" value="<?php echo  $_GET['idlogado'];?>">  <!--O id usuario vai ser alimentado pelo login-->
				  <input type="hidden" name="idpostagem" value="<?php echo $dados['id'];?>">
			
                  <textarea rows="3" class="input-block-level"id="txtcomentarios"name="txtcomentarios" placeholder="Seu comentario aqui"></textarea>
                  <button class="btn blue modal-trigger"id="btncomentario"name="btncomentario"<?php echo $controladorclientes?> type="submit">Comentar</button>
          </div>
		  </form>
			  
			
          <!-- end article full post -->
        </div>  
		  <!-- comentarios-->
		      
	      
	
			  <li class="media">


			        <?php
			    $idpostagem = $dados['id'];
		
                $sqlc = " SELECT * FROM comentario  WHERE comentario.idpostagem = $idpostagem
		                ORDER by comentario.id  DESC  ";
				$resultadoc = mysqli_query($connect, $sqlc);
            
                 if(mysqli_num_rows($resultadoc) >0):
				 while($dadosc = mysqli_fetch_array($resultadoc)):
			     

				
				?>
	
				 <?php
//Esse códi pega os dados do usuario e da academia para o comentario
	$id = $dadosc['idusuario'];

	$sqlb = "SELECT * FROM cadastroacademia,comentario WHERE cadastroacademia.id = $id";
	$resultadob = mysqli_query($connect, $sqlb);
	$dadosb = mysqli_fetch_array($resultadob);

	
	 
	$sqlbs = "SELECT * FROM cadastrousuario,comentario WHERE cadastrousuario.id  = $id";
	$resultadobs = mysqli_query($connect, $sqlbs);
	$dadosbs = mysqli_fetch_array($resultadobs);
	 $controladorcomentariosA ='hidden';
	  $controladorcomentariosU ='hidden';
	if($dadosb)
	{
		 $controladorcomentarios = $dadosb['nomeacademia'];
	}

	 if($dadosbs)
	{
		 $controladorcomentarios = $dadosbs['nome'];
	}
	
	
?>


	




              <a class="pull-left" href="#">
				<img class="media-object" src="assets/img/small-avatar.png" alt="" />		  <!--Mostra o comentario-->
				</a>
              <div class="media-body">

			 
                <h5   class="media-heading"><a href="#"><?php  echo $controladorcomentarios;  ?></a></h5>
		
                <span><?php echo  $dadosc['datacomentario'];?></span>
                <p>
                 <?php echo  $dadosc['comentario']; ?>
				   
				</p>
               </div>










	




		    <li><td><a onClick="mostra('<?php echo $dadosc['id'];?>')" <?php echo $controladorclientes?>>Comentarios</li></a></td>
     <div id="<?php echo $dadosc['id'];?>">
		  <ul>
		   <form action="php/comentarios.php?id=<?php echo $_GET['id'];?> &idlogado=<?php echo $_GET['idlogado'];?>  " method="POST">
		   <div class="span8">
		   	 <input name="txtidlogado" type="hidden" id="txtidlogado" value="<?php echo $_GET['idlogado'];?>" ><br><br>
                  <label>Comente <span>*</span></label>
				  <input type="hidden" name="idusuario" value="<?php echo  $_GET['idlogado'];?>">  <!--O id usuario vai ser alimentado pelo login-->
				  <input type="hidden" name="idpostagem" value="<?php echo $dadosc['id'];?>">
			
                  <textarea rows="3" class="input-block-level"id="txtcomentarios"name="txtcomentarios" placeholder="Seu comentario aqui"></textarea>
                  <button  class="btn blue modal-trigger"id="btncomentario"name="btncomentario"<?php echo $controladorclientes?> type="submit">Comentar🌐</button>
          </div>
		  </form>
			  
			
		
		 
			 
			  <?php  $id = $dadosc['id'];?>
			 <?php $sqlcomentario = "SELECT * FROM  comentario WHERE idpostagem  = $id";
	if($resultadocomentario = mysqli_query($connect, $sqlcomentario)):
	while($dadoscomentario = mysqli_fetch_array($resultadocomentario)):




	$id = $dadoscomentario['idusuario'];

	$sqlb = "SELECT * FROM cadastroacademia,comentario WHERE cadastroacademia.id = $id";
	$resultadob = mysqli_query($connect, $sqlb);
	$dadosb = mysqli_fetch_array($resultadob);

	
	 
	$sqlbs = "SELECT * FROM cadastrousuario,comentario WHERE cadastrousuario.id  = $id";
	$resultadobs = mysqli_query($connect, $sqlbs);
	$dadosbs = mysqli_fetch_array($resultadobs);
	 $controladorcomentariosA ='hidden';
	  $controladorcomentariosU ='hidden';
	if($dadosb)
	{
		 $controladorcomentarios = $dadosb['nomeacademia'];
	}

	 if($dadosbs)
	{
		 $controladorcomentarios = $dadosbs['nome'];
	}
	
	
?>






			







	 
	            <a class="pull-left" href="#">
				<img class="media-object" src="assets/img/small-avatar.png" alt="" />		  <!-- Depois colocar a imagem-->
				</a>
              <div class="media-body">

			 
                <h5   class="media-heading"><a href="#"><?php  echo  $controladorcomentarios;  ?></a></h5>
		
                <span><?php echo $dadoscomentario['datacomentario'];?></span>
                <p>
                 <?php echo  $dadoscomentario['comentario']; ?>
				  
				</p>
   


  



              </div>
              
    



			    <?php
					
					endwhile;
					endif;
               ?>
         </div>
            <?php
			//endif;
			endwhile;
			//endif;
			endif;
		
			?>
            </li>
		  
			
			
			
   

      </div>
    </div>
	
	
</section>









			   <?php 
		
				
				endwhile;
					
				else: ?>
				<!--Isso é para preencher quando não tiver nenhma postagem-->
				<tr>
					<td>------</td>
					
				</tr>

			   <?php 
				endif;
					endif;
			   ?>



			   <?php
                // Footer
                include_once 'includes/footer.php';
               ?>
 
      
	  
        <footer>
            <p>&copy; LinKad</p>
        </footer>
       
<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="assets/js/sequence/setting.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/application.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>
    <script src="js/postagem.js"></script>






	  </body>

    </html>

