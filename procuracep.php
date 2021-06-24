

 <?php
   include_once 'php/db_connect.php';

   include_once 'includes/header.php';
 
   include_once 'includes/message.php';
  
  
  
 
   ?>
   	<?php
 if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM cadastroacademia WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<html>
    <head>
    <title>Procure seu Endereço</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modelo de Exerc�cio</title>
    <link rel="stylesheet" href="css/estilo.css">

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");

    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
			
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";
				
                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    </head>

    <body>
    <!-- Inicio do formulario    ''''  o campo que tem o id é o id da academia -->
	  <header>
        <h1>Procure o seu Endereços Apenas com o CEP</h1>
    </header>

	  <section>
      <form method="Post" action="php/processacep.php">
       <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"   
	   <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" required
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60"required /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40"required /></label><br />
        <label>Numero:
        <input name="numero" type="text" id="numero" size="40"required /></label><br />
		<label>Complemento:
	    <input name="complemento" type="text" id="complemento" size="240" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" required/></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2"required /></label><br />
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" required/></label><br />
		<input type="submit" id="btn-cadastrar"name="btn-cadastrar"value="Cadastrar">
      </form>
	  </section>

	  </body>

    </html>



<?php
// Footer
include_once 'includes/footer.php';

?>