
 <?php
   include_once 'php/db_connect.php';

   include_once 'includes/header.php';
 
   include_once 'includes/message.php';
  
  
   $verificador = 0;
   $controlador = 'disabled';


    
	$id =  $_GET['idlogado'];

	 
	 
	 if ($id != 0) {
	 $controlador = '  ';
	 }
	 ?>





<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
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

    </Style>
	<html  xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Procure seu Endereço</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <!-- styles -->

</head>

<body>
<div id="posbot" class="row">
                 <div class="span12">
                 <ul class="filter">
              <a href="adicionar.php" class="btn btn-color">Cadastro Academia</a>
			  <a href="login.php?idlogado=0" class="btn btn-color">Login</a>
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
				height:230px;
				width:1123px
			}
		#Acadss{
			   position: absolute; 
	left: 21px; /* posiciona a 90px para a esquerda */ 
	top: 0px;
				
			}
				#posbot{
			   position: absolute; 
	left: 1084px; /* posiciona a 90px para a esquerda */ 
	top: -13px;
				
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
			section {
    background:#dcdcdc;

    border-radius: 20px;
    padding:15px;
    width:848px;

    margin:auto;
    box-shadow:5px 5px 10px black;
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

			
				
		      
			<div id="Acadss">
	 <form method="POST" action="php/postar_upload.php" enctype="multipart/form-data">

	  
	
	 <input name="txtidlogado" type="hidden" id="txtidlogado" value="<?php echo $_GET['idlogado'];?>" ><br><br>
	Texto:  <input name="txtPostar" type="texto" id="txtPostar" ><br><br>
	Imagem: <input name="arquivo" id="arquivo" type="file" ><br><br>



	


	
	<input type="submit"class="btn btn-color"name="btn-postar"id="btn-postar" value="Pronto" <?php echo $controlador?> >
       
	   </form>
	</div>
	     <!---->
		       
<div class="blocos">
	    <section >                                           
	      <div class="container">
	   
	    
		       <div class="">
					
				
				
				  <?php

		
               $sql = "SELECT cadastroacademia.nomeacademia,cadastroacademia.site,cadastroacademia.email, 
			                  postagem.id, postagem.foto,postagem.mensagem,postagem.idacademia 
							  FROM cadastroacademia, postagem WHERE cadastroacademia.id = postagem.idacademia
							  ORDER by postagem.id DESC  ";
				$resultado = mysqli_query($connect, $sql);
              
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
                ?>
			 <div class="">
      <div class="">
        <div class="">
        
            <div class="">
              <h4><?php echo $dados['mensagem']; ?></h4>
            </div>
            <div class="">
            </div>
            <div class="">
              <div class="">
                <!-- start flexslider -->
                <div class="">
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
                    <li><label>Saiba Mais :</label><a href="infoacademia.php?id=<?php echo $dados['idacademia']; ?>"><button type="button" class="btn" data-complete-text="finished!" >Aqui</button> <script> $('.btn').button('complete') </script></a></li>

                  </ul>
                </div>
              </div>
            </div>
         
		  <!--Campo de comentarios-->
		   <form action="php/comentarios.php " method="POST">
		   <div class="span8">
		   	 <input name="txtidlogado" type="hidden" id="txtidlogado" value="<?php echo $_GET['idlogado'];?>" ><br><br>
                  <label>Comente <span>*</span></label>
				  <input type="hidden" name="idusuario" value="<?php echo $dados['idacademia'];?>">  <!--O id usuario vai ser alimentado pelo login-->
				  <input type="hidden" name="idpostagem" value="<?php echo $dados['id'];?>">
			
                  <textarea rows="3" class="input-block-level"id="txtcomentarios"name="txtcomentarios" placeholder="Seu comentario aqui"></textarea>
                  <button class="btn btn-small btn-success"id="btncomentario"name="btncomentario"<?php echo $controlador?> type="submit">Comentar</button>
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

	$id = $dadosc['idusuario'];

	$sqlb = "SELECT * FROM cadastroacademia,comentario WHERE cadastroacademia.id = $id";
	$resultadob = mysqli_query($connect, $sqlb);
	$dadosb = mysqli_fetch_array($resultadob);

?>


	




              <a class="pull-left" href="#">
				<img class="media-object" src="assets/img/small-avatar.png" alt="" />		  <!-- Depois colocar a imagem-->
				</a>
              <div class="media-body">
                <h5 class="media-heading"><a href="#"><?php echo  $dadosb['nomeacademia'];?></a></h5
                <span><?php echo $dadosc['datacomentario'];?></span>
                <p>
                 <?php echo  $dadosc['comentario']; ?>
				</p>
                <a href="#">Comentar</a>
              </div>
















			    <?php
					  
			//endif;
			endwhile;
			//endif;
			endif;
			?>
            </li>
		  
			
			
			
      </div>
   
	
	</sectoin>


	  <?php 
		
				
				endwhile;
					
				else: ?>
				<!--Isso é para preencher quando não tiver nenhma postagem-->
				<tr>
					<td>------</td>
					
				</tr>

			   <?php 
				endif;
				
			   ?>
			   </div>




 </div>

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

//spg_close();

?>