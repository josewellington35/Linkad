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
  
</head>

<body>

    <!--Imagem do peso-->
    <section class="section-block">
        <div class="container">
            <div id="imagem-principal">
                <div class="text-center">
                    <img src="php/foto/img-peso.jpg" class="img-peso img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--Fim da imagem do peso-->

    <!--Container com todas as informações do cadastro-->
    <section class="section-block">
        <div class="container">

            <!--Tabela com informações dos dados-->
            <div class="row">
                <div class="col-sm-12">
                    <h2>Cadastro de Academia</h2>
                    <p>Cadastre sua academia e <strong>comece a vende mais!</strong></p>
                </div>

                <!--Container com informações das tabelas do cadastro-->
                <div class="container">
                    <!--ligaçõa com o banco de dados-->
                    <form action="php/create.php" method="POST" class="form-cadastro" >
                        <h2>Dados Gerais da Academia</h2>
                        <!--Tabela com informações (Nome da academia e CNPJ)-->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for"nome_academia">
                                        Nome da Academia
                                        <span class="required">*</span>
                                    </label>
                                    <div>
                                        <!--required é para a obrigatoriedade de preenchimento-->
                                        <!--Os id e name são para caso o banco de dados queiram pegar os dados dos inputs-->
                                        <input type="text" class="form-control" id="nome_academia" name="nome_academia"
                                            placeholder="Nome da Sua Academia" maxlength="30" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label " for="cnpj">
                                        CNPJ
                                        <span class="required">*</span>
                                    </label>
                                    <div>
                                        <!--required para a obrigatoriedade de preenchimento-->
                                         <!--Os id e name são para caso o banco de dados queiram pegar os dados dos inputs-->
                                        <!--Para o data-mask funcionar no html tem que pegar o JQuery-->
                                        <input type="tel" class="form-control data-mask" id="cnpj" name="cnpj"
                                            placeholder="00.000.000.0000/00" data-mask="00.000.000.0000/00"
                                            maxlength="15" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Tabela com informações (E-mail e telefone)-->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">
                                        E-mail
                                        <span class="required">*</span>
                                    </label>
                                    <div>
                                        <!--required para a obrigatoriedade de preenchimento-->
                                         <!--Os id e name são para caso o banco de dados queiram pegar os dados dos inputs-->
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Seu E-mail" maxlength="50" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label " for="telefone">
                                        Telefone da Academia
                                        <span class="required">*</span>
                                    </label>
                                    <div>
                                        <!--required é para a obrigatoriedade de preenchimento-->
                                        <!--Os id e name são para caso o banco de dados queiram pegar os dados dos inputs-->
                                        <!--Para o data-mask funcionar no html tem que pegar o JQuery-->
                                        <input type="tel" class="form-control data-mask" id="telefone" name="telefone"
                                            placeholder="(00) 00000-0000" data-mask="(00) 00000-0000" maxlength="12"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Tabela com informações (Modalidades)-->
                      <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label" for="Modalidades">
                                      Modalidades
                                    </label>
                                    <div>
                                        <input type="text" class="form-control" id="modalidades" name="modalidades"
                                            placeholder="Modalidades">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Tabela com informações (Site)-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label" for="url_site">
                                        Site
                                    </label>
                                    <div>
                                        <input type="text" class="form-control" id="url-site" name="url_site"
                                            placeholder="Seu site">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Tabela com informações (Descrição e imagens)-->
                        <div class="row">
                         <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for"nome_academia">
                                        Descrição
                                        <span class="required">*</span>
                                    </label>
                                    <div>
                                        <!--required é para a obrigatoriedade de preenchimento-->
                                        <!--Os id e name são para caso o banco de dados queiram pegar os dados dos inputs-->
                                        <input type="text" class="form-control" id="descricao" name="descricao"
                                            placeholder="Descricao da sua academia" maxlength="130" required>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="imagem">
                                        Imagens da academia
                                    </label>
									<!-- Aqui estamos fazendo o upload das Imagens-->
                                       
	                                     Imagem: <input name="arquivo" type="file"><br><br>
	                               
                                </div>
                            </div>

                        </div>
                       
                        <!--Nome - Senha-->
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Senha</h2>
                            </div>
                        </div>
                        <!--Tabela com informações (senha e confirme senha)-->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" for="senha">
                                        Senha
                                        <span class="required">*</span>
                                    </label>
                                    <div>
                                        <!--required é para a obrigatoriedade de preenchimento-->
                                        <!--Os id e name são para caso o banco de dados queiram pegar os dados dos inputs-->
                                        <input type="password" class="form-control" id="senha" name="senha"
                                            placeholder="Senha" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label " for="c-senha">
                                        Confirme sua senha
                                        <span class="required">*</span>
                                    </label>
                                    <div>
                                        <!--required é para a obrigatoriedade de preenchimento-->
                                        <!--Os id e name são para caso o banco de dados queiram pegar os dados dos inputs-->
                                        <input type="password" class="form-control" id="c-senha" name="c-senha"
                                            placeholder="Confirme sua senha" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Botões (Cadastrar e limpar)-->
                        <div class="row  text-center">
                            <div class="offset-lg-6 col-lg-6 col">
                                <input class="botoes btn" type="reset" value="Limpar">
                                <input id="btn-cadastrar"class="botoes btn"name="btn-cadastrar" type="submit" value="Cadastrar">
                          
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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



