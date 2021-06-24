<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Usuário</title>
    <script src="js1/bootstrap.bundle.js"></script>
    <script src="js1/bootstrap.bundle.min.js"></script>
    <script src="js1/bootstrap.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/jquery.js"></script>
    <script src="js1/jquery.mask.js"></script>
    <script src="js1/jquery.mask.min.js"></script>
    <link href="Style/usuario.css" rel="stylesheet" />
    <link href="Style/bootstrap-grid.css" rel="stylesheet" />
    <link href="Style/bootstrap-grid.min.css" rel="stylesheet" />
    <link href="Style/bootstrap-reboot.css" rel="stylesheet" />
    <link href="Style/bootstrap-reboot.min.css" rel="stylesheet" />
    <link href="Style/bootstrap-theme.css" rel="stylesheet" />
    <link href="Style/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="Style/bootstrap.css" rel="stylesheet" />
    <link href="Style/bootstrap.min.css" rel="stylesheet" />



	<!--Serve para procura o endereço-->
	  <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
          
			 
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
            
			
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
                document.getElementById('endereco').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";
               
				
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

    <section class="section-block">
        <div class="container">
            <div id="imagem-princ">
                <div class="text-center">
                    <img class="img-linkad" src="Image/linkad.jpg" />
                    
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h2>Cadastre-se</h2>
            </div>

            <div class="container">
                 <form action="php/creatusuario.php" method="POST" class="form-cadastro" >
                    <div clas="row">
                    <label class="control-label">
                        Informe seus dados:
                    </label>
                    </div>

                    <!-- informa os dados do usuário-->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label" for="nome_usuario">
                                    Nome do Usuário
                                    <span class="required">*</span>
                                </label>
                                <div>
                                    <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" placeholder="Nome completo" required>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="control-label" for="cpf">
                                CPF
                                <span class="required">*</span>
                            </label>
                            <div>
                                <input type="tel" class="form-control data-mask" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="000.000.000-00" maxlength="11" autocomplete="off" required>
                            </div>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label" for="e-mail">
                                    E-mail
                                    <span class="required">*</span>
                                </label>
                                <div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class=form-group>
                                <label class="control-label" for="telefone">
                                    Telefone/Celular
                                    <span class="required">*</span>
                                </label>
                                <div>
                                    <input type="tel" class="form-control data-mask" id="telefone" name="telefone" placeholder="(00)00000-0000" data-mask="(00)00000-0000" maxlength="11" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label" for="nome_usuario">
                                    Endereço
                                    <span class="required">*</span>
                                </label>
                                <div>
                                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o nome da rua/avenida" required>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label" for="numero">
                                    Número
                                    <span class=required>*</span>
                                </label>
                                <div>
                                    <input type="number" class="form-control" id="numero" name="numero" placeholder="Nº" required>
                                </div>
                            </div>
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label" for="bairro">
                                    Bairro
                                    <span class="required">*</span>
                                </label>
                                <div>
                                    <input type="text" class="form-control" id="bairro" name=bairro placeholder="Bairro" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-goup">
                                <label class="control-label" for="estado">
                                    UF
                                    <span class="required">*</span>
                                </label>                                
                            </div>
                            <div>
                                <select class="form-control" id="estado" name="estado">
                                    <option value="estado">ESTADO</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MG">MG</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="PR">PR</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="RS">RS</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div clas="form-group">
                                <label class="control-label" for="cidade">
                                    Cidade
                                    <span class="required">*</span>
                                </label>
                                <div>
                                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label" for="cep">
                                    CEP
                                    <span class="required">*</span>
                                </label>
                                <div>
                                    <input  onblur="pesquisacep(this.value);" type="tel" class="form-control data-mask" id="cep" name="cep" data-mask="00000-000" placeholder="00000-000" maxlength="8" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>
               

            </div>
        </div>

        
        <!-- informar a senha digitada pelo usuário-->
        <div class="container">
          
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                           
                            <div>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" minlength="8" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            
                            <div>
                                <input type="password" class="form-control" id="confirma" name="confirma" placeholder="Confirme sua senha" minlength="8" required>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row  text-center">
                            <div class="offset-lg-6 col-lg-6 col">
                                <input class="botoes btn" type="reset" value="Limpar">
                                <input id="btn-cadastrar"class="botoes btn"name="btn-cadastrar" type="submit" value="Cadastrar">
                          
                            </div
       

        </div>

 </form>   
 </section>

    <footer>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script src="js/jquery.mask.min.js"></script>
    </footer>

</body>