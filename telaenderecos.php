 <?php
   include_once 'php/db_connect.php';

   include_once 'includes/header.php';
 
   include_once 'includes/message.php';
  
  
   // Esse código controla todos os campos apartir da pessoa que está logado
   
   $controlador = 'disabled';


    
	$idpermantente =  $_GET['id'];
	$idlogado =  $_GET['idlogado'];
	 
	 
	 if ($idpermantente == $idlogado ) {
	 $controlador = '  ';
      }
	
   ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Serenity - Modern bootstrap website template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  
    <link rel="stylesheet" href="css/css-cadastro.css">
  <!-- =======================================================
    Theme Name: Serenity
    Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" background-color :"#dcdcdc">


<?php
  	$id = mysqli_escape_string($connect, $_GET['id']);

	 $sql = "SELECT * FROM cadastroacademia, postagem WHERE cadastroacademia.id =
	$id and postagem.idacademia = $id ORDER by postagem.id DESC  ";
	$resultado = mysqli_query($connect, $sql);
	 mysqli_num_rows($resultado) > 0;
    $dados = mysqli_fetch_array($resultado)
	
?>




			
						



<style>
	 body{background: #dcdcdc;}
	#i {
    background:#ffffff;
    border-radius: 20px;
    padding:15px;
    width:70%;
    margin:auto;
    box-shadow:5px 5px 10px black;
}
	 </style>

   <section id="maincontent">
    <div class="container">
	   <div class="row">
        <div class="span12">
          <ul class="filter">
             <a href="teladepostagens.php?id=<?php echo $dados['idacademia']; ?>&idlogado=<?php echo  $_GET['idlogado']; ?>" class="btn btn-color">Postagens</a>
             <a href="infoacademia.php?id=<?php echo $dados['idacademia']; ?>&idlogado=<?php echo  $_GET['idlogado']; ?>" class="btn btn-color">Academia</a>
             <a href="index.php?id=<?php echo $dados['idacademia']; ?>&idlogado=<?php echo  $_GET['idlogado']; ?>" <?php echo $controlador?> class="btn btn-color">Config</a>
	         <a href="Home.php?id=<?php echo $_GET['id'];?>&idlogado=<?php echo  $_GET['idlogado']; ?>" class="btn btn-color">Home</a>
		   </ul>
        </div>
      </div>
      </div>
      </div>

	  	 <section class="section-block">
        <div class="container">
            <div id="imagem-principal">
                <div class="text-center">
                    <img src="php/foto/img-peso.jpg" class="img-peso img-fluid">
                </div>
            </div>
        </div>
    </section>


      <div class="row">
        <div class="span12">

					              <?php
 if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	 $sql = "SELECT * FROM cadastroacademia, enderecoacademia WHERE cadastroacademia.id = $id 
	 and enderecoacademia.idacademia = $id ORDER by enderecoacademia.id DESC  ";
	$resultado = mysqli_query($connect, $sql);
	 if(mysqli_num_rows($resultado) > 0):
    while($dados = mysqli_fetch_array($resultado)):
	
?>
          <article>
            <div class="heading">
              <h4><?php echo $dados['nomeacademia']; ?></h4>
            </div>
            <div class="clearfix">
            </div>
            <div class="row">




              <div class="span8">
                <!-- start flexslider -->


                <div class="flexslider">
                  <ul class="slides">




                    <li>
                <div id="i">
                <div class="project-widget">
                
                  <ul class="project-detail">
                    <li><label>Endereco :</label><?php echo $dados['endereco']; ?></li>
                    <li><label>Numero :</label><?php echo $dados['numero']; ?></li>
                    <li><label>Cidade :</label> <?php echo $dados['cidade']; ?></li>
					<li><label>Estado :</label><?php echo $dados['estado']; ?></li>
					<li><label>Bairro :</label><?php echo $dados['bairro']; ?></li>
					<li><label>Cep :</label><?php echo $dados['cep']; ?></li>
                   
                  </ul>
                </div>
              </div>


                    </li>
                
                  </ul>
                </div>
                <!-- end flexslider -->
              
              </div>
			



             
            </div>
          </article>

		     <?php 
				endwhile;
				
				else: ?>
				<!--Isso é para preencher quando não tiver nenhma postagem-->
			

			   <?php 
				endif;
				endif;
			   ?>

          <!-- end article full post -->
        </div>
      </div>
    </div>
  </section>

  	<!--Finalizando o preenchimento das fotos-->
     
	 
	 



  <!-- Footer
 ================================================== -->
  <footer class="footer">
    
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>
              &copy; Serenity - All right reserved
            </p>
          </div>
          <div class="span6">
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Serenity
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript Library Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="assets/js/sequence/setting.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/application.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>


</body>

</html>