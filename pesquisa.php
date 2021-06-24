<?php

// Conexão
include_once 'php/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/css-cadastro.css">
    <script src="js/coneccao.js"></script>
</head>
<body>
    <!--Imagem do peso-->
    <section class="section-block">
        <div class="container">
            <div id="imagem-principal">
                <div class="text-center">
                    <img src="img/img-peso.svg" class="img-peso img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--Fim da imagem do peso-->

    <section class="section-block">
        <div class="container">

            <!--Tabela com informa��es dos dados-->
            <div class="row">
                <div class="col-sm-12">
                    <h2>Pesquise sua Academia</h2>
                    <p>Academias <strong>Come�e a Vender MAIS!</strong></p>
                </div>

            </div>
            <form class="form-cadastro" method="" action="">
                <h2>Dados Gerais da Academia</h2>
                <!--Tabela com informa��es (Nome da academia e CNPJ)-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label" for"nome_academia">
                                Pesquise pelo Nome da Academia
                                <span class="required">*</span>
                            </label>
                            <div>
                                <input type="hidden" id="id" value="" />
                                <!--required � para a obrigatoriedade de preenchimento-->
                                <!--Os id e name s�o para caso o banco de dados queiram pegar os dados dos inputs-->
                                <input type="text" class="form-control" id="nome_academia" name="nome_academia"
                                       placeholder="Nome da Sua Academia" maxlength="30" required>
                            </div>
                        </div>
                    </div>
                </div>
                <p>DADOS <strong>FULL!</strong></p>
                <div id="res">

                    kljhgjks
                </div>
                <div class="row  text-center">
                    <div class="offset-lg-6 col-lg-6 col">
                        < <li><a href="index.html"><i class="botoes btn"></i>Cadastrar</a></li>
                        <input class="botoes btn" type="submit" value="Pesquisar" onclick="mostrar()">
                    </div>
                </div>
            </form>
    </section>

</body>
	<?php
// Footer
include_once 'includes/footer.php';
?>