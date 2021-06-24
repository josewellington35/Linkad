<?php
$banco = "d4i08hnd5q6rob";
$usuario = "ihfhgongrmwqap";
$senha = "07033afaa46b2a0a42bf327c5f4d55b9cc9d0fc7db0ffe8dd3de1283d452bbf9";
$hostname = "ec2-34-225-82-212.compute-1.amazonaws.com";
$porta = 5432;
$conn = pg_connect("host=$hostname port=$porta dbname=$banco user=$usuario password=$senha");
if (!$conn) {
    echo "Não foi possível conectar ao banco postegreSQL. "; exit;
}
else {
   
}

$modalidade= implode(",",$_POST['modalidade']);
$nomeacad = $_POST['nome_academia'];
$emailacad = $_POST['email'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$site = $_POST['url_site'];
$descricao = $_POST['descricao'];
$enderecoacad = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$numero = $_POST['numero'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$senhaacad = $_POST['senha'];
$confirmasenha = $_POST['c-senha'];


$query = "insert into academias (nomeacad ,emailacad ,cnpj, telefone, site, descricao, modalidade ,enderecoacad ,bairroacad , cidade , numero , estado, cep, senhaacad , confimesenhaacad ) values ('$nomeacad','$emailacad','$cnpj','$telefone','$site', '$descricao', '$modalidade', '$enderecoacad','$bairro', '$cidade', $numero, '$estado', '$cep', '$senhaacad', '$confirmasenha');";

$res = pg_query($conn, $query); 
    if ($res) {
        
    }else {
        echo "O usuário deve ter inserido entradas inválidas\n";
    }

?>

<!-- -->

    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso de cadastro</title>

    <style>
         h1{
            text-align: center;
            font: 20pt normal Arial;
        }
        #correto{
            display: block;
            margin-left: auto;
            margin-right: auto;     
        }
    </style>
</head>
<body>
    <h1><strong>ACADEMIA CADASTRADA COM SUCESSO! <br><br> CLIQUE NA IMAGEM ABAIXO</strong></h1>
    <a href="inserir o link da tela principal"><img id="correto" src="../Image\sucesso.jpg" /></a>

  
    
</body>
</html>

<?php

pg_close();

?>
