	<?php
// Conexão
include_once 'php/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';

 $verificador = 0;
   $controlador = 'disabled';


    
	$id =  $_GET['id'];

	 
	 
	 if ($id != 0) {
	 $controlador = '  ';
	 }



  
?>
<?php
  //Serve para passar o id para as outras telas
	$id = mysqli_escape_string($connect, $_GET['id']);

	 $sql = "SELECT * FROM cadastroacademia, postagem WHERE cadastroacademia.id =
	 $id and postagem.idacademia = $id ORDER by postagem.id DESC  ";
	 $resultado = mysqli_query($connect, $sql);
	 mysqli_num_rows($resultado) > 0;
    $dados = mysqli_fetch_array($resultado)
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">





	 <!-- styles -->
	  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
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
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
   <!--<link rel="stylesheet" href="css/css-cadastro.css"> Estilo muito louca-->
    <link rel="stylesheet" href="css/css-cadastro.css">
	 
    <script src="js/coneccao.js"></script>
</head>
<style>
	 body{background: #dcdcdc;}
	 </style>
   <section id="maincontent">
    <div class="container">
	   <div class="row">
       
      </div>
 
	   <div class="row">
        <div class="span12">
          <ul class="filter">
             <a href="teladepostagens.php?id=<?php echo $dados['idacademia']; ?>&idlogado=<?php echo  $_GET['idlogado']; ?>" class="btn btn-color">Postagens</a>
             <a href="infoacademia.php?id=<?php echo $dados['idacademia']; ?>&idlogado=<?php echo  $_GET['idlogado']; ?>" class="btn btn-color">Academia</a>
             <a href="telaenderecos.php?id=<?php echo $dados['idacademia']; ?>&idlogado=<?php echo  $_GET['idlogado']; ?>" class="btn btn-color">Enderecos</a>
             <a href="Home.php?id=<?php echo $_GET['id'];?>&idlogado=<?php echo  $_GET['idlogado']; ?>" class="btn btn-color">Home</a>
		   </ul>
        </div>
      </div>

     <div class="row">
	<div >
		<h3 class="light"> Clientes </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Cnpj:</th>
					<th>Email:</th>
					<th>Modalidades:</th>
					<th>Telefone:</th>
					<th>Site:</th>
					<th>Descricao:</th>
					
					<th>Imagens:</th>
					<th>Senha:</th>
					<th>Endereco:</th>
					
				</tr>
			</thead>
        
			<body>
			 <section class="section-block">
        <div class="container">
            <div id="imagem-principal">
                <div class="text-center">
                    <img src="php/foto/img-peso.jpg" class="img-peso img-fluid">
                </div>
            </div>
        </div>
    </section>
				<?php
				$sql = "SELECT * FROM cadastroacademia WHERE id = $id";
				$resultado = mysqli_query($connect, $sql);
               
                  mysqli_num_rows($resultado) > 0;

				$dados = mysqli_fetch_array($resultado);
				?>
				<tr>
					<td><?php echo $dados['nomeacademia']; ?></td>
					<td><?php echo $dados['cnpj']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['modalidades']; ?></td>
					<td><?php echo $dados['telefone']; ?></td>
					<td><?php echo $dados['site']; ?></td>
					<td><?php echo $dados['descricao']; ?></td>
					<td><?php echo $dados['imagens']; ?></td>
					<td><?php echo '**************' ?></td>
					<td><?php echo $dados['endereco']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
					<td><a href="procuracep.php?id=<?php echo $dados['id']; ?>"disabled class="btn-floating green"><i class="material-icons">insert_chart</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php/delete.php?id=<?php echo $dados['id']; ?>" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			  

			<tbody>
			
		</table>
		<br>
		
	
	</div>
</div>
  </div>
      </div>
    </div>
  </section>

  	<!--Finalizando o preenchimento das fotos-->
     



<?php
// Footer
include_once 'includes/footer.php';
?>

