<?php


include_once 'php/db_connect.php';

?>





<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
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
 
    <link rel="stylesheet" href="css/css-cadastro.css">
    <title></title>
  <style>
body { background-color: #fff; color: #fff; padding: 0; margin: 0;overflow-y:visible;overflow-x:hidden; }
.container { width: 100%; margin:0; border-radius:0;  }
.container .ism-slider { margin-left:0; margin-right:0; height:88%; border-radius:0; border-bottom: 3px solid; position:absolute;margin-top:3%;}
</style>
    <link href="Style/Slider.css" rel="stylesheet" />
    <link href="Style/Style.css" rel="stylesheet" />
    <script src="Js1/Slider.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="Js1/Scroll.js"></script>
    <Style>
        .pesq{
            text-align: center;  
		}
        #pes{
            display: inline;
            width: 30%;
            float: center;
            text-align: center;
            display: inline-block;
            
		}
		#alinhab{
			   position: absolute; 
	left: 958px; /* posiciona a 90px para a esquerda */ 
	top:  3px;
  width:1419px;
				
			}
    </Style>
</head>

<body>

    <div id="alinhab">
      <div class="row">
        <div class="span12">
          <ul class="filter">
		
              <a href="adicionar.php" class="btn btn-color">Cadastro Academia</a>
			  <a href="login.php?id=<?php echo $_GET['id'];?>" class="btn btn-color">Login</a>
			 
		      <a href="cadastrousuario.php?id=0" class="btn btn-color">CadastroUsuario</a>
          	</ul>
        </div>
      </div>
    </div>










	
<div class='container'>
<div class="ism-slider" data-play_type="loop" data-radios="false" id="my-slider">
    <ol>
    <li>
        <img src="Image/Acad1.jpg" />
    </li>
    <li>
<img src="Image/Acad4.jpg" />
    </li>
    <li>
  <img src="Image/Acad3.jpg" />
    </li>
    <li>
    <img src="Image/Acad5.jpg" />
    </li>
  </ol>
</div>
            </div>
     
         <div class ="Menu"> 
             <asp:HyperLink ID="HyperLink1" href="Login.html" runat="server"> <img class="login" src="Image/Usuário.png" /></asp:HyperLink>
          <nav class ="men">
               <h2 class="Site">LinkADD</h2>
    <ul class="primary">
    <li class="links">
     <asp:HyperLink ID="Inicio"  href="#incios" class="scrollsuave" runat="server">Inicio</asp:HyperLink>      
    </li> 
    <li class="links">
        <asp:HyperLink href="#Acads" class="scrollsuave" ID="Academias"   runat="server">Academias</asp:HyperLink>
    </li>
    <li class="links">
    <asp:HyperLink ID="Funciona" href="#Funcionac" class="scrollsuave" runat="server">Como funciona</asp:HyperLink>
    </li>
        <li class="links">
        <asp:HyperLink ID="Sobre" href="#Sobrenos" class="scrollsuave" runat="server">Sobre</asp:HyperLink>
    </li>
  </ul>
</nav>     
     </div>
        <div class="Topacad">
         
        		</div>          
		
		
		
		<!-- CONSULTA COMECA AQUI -->
		
		<style>
		
		
			#Acads{
				background-color: #dcdcdc;
				color: black;
				font-family: 'Arial';
				overflow-y: scroll;
				overflow-x: hidden;
			}
		
			#Acads .bloco{
				background-color: white;
				width: 400px;
				display: inline;
				float: left;
				margin: 10px;
			}
			
			#Acads .bloco img{
				height: 400px;
				width: 400px;			
			}
			
			#Acads .bloco h2{
				font-weight: 200;
			}
			
			#Acads .bloco .infos{
				padding: 10px;
			}
			
			#Acads .search{
				display: inline-block;
				padding: 10px;
				width: 100%;
			}
			
			#Acads .search .align{
				margin: 0 auto;
				width: 400px;
			}
			
			#Acads .search input{
				width: 400px;
				text-align: center;
				border: none;
				border-radius: 10px;
				padding: 20px;
				font-size: 25px;
			}				
			
			#Acads .blocos{
				width: 85%;
				margin: 0 auto;
			}
			
		</style>
		
		
		<div id="Acads" class="DLAcad">     
            
			
			<a name="busca"></a>
		
			
			<div class="search">
				<div class="align">
					<form method="post" action="Home.php#busca">
						<input type="text" value="<?php if (isset($_POST['nomeacademia'])) echo $_POST['nomeacademia']; ?>" name="nomeacademia" placeholder="Digite o nome da academia" />
					</form>
				</div>
			</div>
			<div class="blocos">
				
				<?php 
			
					if (isset($_POST['nomeacademia'])) {
						$sql = "SELECT id,endereco, imagens, site, nomeacademia, modalidades FROM cadastroacademia WHERE LOWER(nomeacademia) LIKE '%" . strtolower($_POST['nomeacademia']) . "%' LIMIT 10";
					}
					else{
						$sql = "SELECT id,endereco, imagens, site, nomeacademia, modalidades FROM cadastroacademia LIMIT 10";
					}
				 
					$result = mysqli_query($connect, $sql);

					while ($row=mysqli_fetch_array($result)){ 
				?>
				
				<div class="bloco">
					<a href="<?php echo $row['site']; ?>"  target="_blank">
						<img src="php/foto/<?php echo $row['imagens']; ?>" />
					</a>					
					<div class="infos">
						<h1><?php echo $row['nomeacademia']; ?></h1>
						<h2><?php echo $row['endereco']; ?></h2>
						<p>Modalidades: <?php echo $row['modalidades']; ?></p>
						<li><label>Postagens :</label><a href="teladepostagens.php?id=<?php echo $row['id']; ?>&idlogado=<?php echo  $_GET['idlogado']; ?>"><button type="button" class="btn" data-complete-text="finished!" >Aqui</button> <script> $('.btn').button('complete') </script></a></li>

					</div>
				
				</div>
					
				
				<?php 
					}
					if (mysqli_num_rows($result)== 0) {
				?>
				<p style="text-align: center">Não há resultados disponíveis para essa consulta.</p>
				<?php 
					}
					
				?>
					
			</div>
		</div>
		
		<!-- CONSULTA TERMINA AQUI -->

        <div id="Funcionac"  class="Cfunciona"> </div>
        <div class="Cfunciona2"></div>
<h1 class="cadast">VEJA ABAIXO COMO É FÁCIL CADASTRAR SUA ACADEMIA!</h1>
            <div class="arredondar" style="margin-left:13%">
                <img class="imagem" src ="Image/IconeCadast.png" /></div> 
        <h1 class="coment "style="margin-left:11.5%">1. FAÇA SEU CADASTRO</h1>
        <p class="coment2" style="margin-left:14%">Em menos de 5 minutos</p>
            <div class="arredondar" style="margin-left:43%">
                <img class="imagem" style=" margin-left:22%;" src ="Image/IconConfir.png" /></div>
        <h1 class="coment" style="margin-left:40%">2. CONFIRME O PAGAMENTO</h1>
        <p  class="coment2" style="margin-left:41.5%; text-align:justify;">Assim que o pagamento confirmar, em <br/> questão de minutos você verá o resultado!</p>
            <div class="arredondar" style="margin-left:73%">
                <img class="imagem" src ="Image/IconPag.png" /></div>
        <h1 class="coment" style="margin-left:74%">3. LUCRE MUITO!</h1>
        <p  class="coment2" style="margin-left:74%" >Aproveite os nossos beneicios<br/> e lucre a renda da sua academia!</p>
        <div class="cadastre">
            <asp:HyperLink ID="cad" href="cadastrar" runat="server">CADASTRE JÁ!</asp:HyperLink></div>
        <div id="Sobrenos" class="falecn">
            <h1 class="Sobren">SOBRE NÓS</h1>
            <p class="sobre1"> Hoje, mais do que um comparador de preços, somos um serviço completo de apoio à compra.<br />
             Anunciamos ofertas de mais de 300 lojas em nosso site e app para auxiliar na busca pelo melhor preço.<br /> Assim, oferecemos conforto e segurança para você encontrar o produto ideal pelo melhor preço sem <br/>precisar ir de site em site.</p>
            <h1 class="cont"> CONTATO</h1>
            <p class="cont1"> LinkADD LTDA.</p>
            <p class="cont2"> AV. dos Marombeiros, N° 69 - São Paulo</p>
           
        </div>
         <div class="footer1">
            <h1 class="footer">ⓒ 2020. LinkADD. Todos os direitos reservados.</h1></div>

</body>
</html>



<?php

pg_close();

?>