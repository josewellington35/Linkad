//window.addEventListener('load', carregado);

// var db = openDatabase("MeuBanco", "2.0", "Primeiro Banco Local",4048);

//db.transaction(function (tx) {
//    tx.executeSql('CREATE TABLE empressas (ID PRIMARY KEY, nomeacademia TEXT,cnpj TEXT, email TEXT,,modalidades Text,telefone TEXT,site TEXT,descricao TEXT,imagens TEXT,senha TEXT,endereco TEXt)');


//});
//function carregado()
//{
//    //document.getElementById('salvar1').addEventListener('click', salvar);
//    salvar();
//    mostrar();
//}
function salvar()
{
    let nomeAcademia = document.getElementById('nome_academia').value;
  //  let cnpj = document.getElementById('cnpj').value;
    let email = document.getElementById('email').value;
    let telefone = document.getElementById('telefone').value;
    let site = document.getElementById('url-site').value;
    let descricao = document.getElementById('descricao').value;
    let imagens = document.getElementById('imagem').value;
    let senha = document.getElementById('senha').value;
    let cnpj = document.getElementById('cnpj').value;
    var armazenar
    db.transaction(function (armazenar) {
        armazenar.executeSql('INSERT INTO empressas(nomeacademia,cnpj,email,modalidades,telefone,site,descricao,imagens,senha,endereco) VALUES(?,?,?,?,?,?,?,?)', [nomeAcademia, cnpj, email, telefone, site, descrica, imagens, senha]);


    });
    // convertendo dados os tipos

    let nomeAcademia1 = String(nomeAcademia.value);// convertendo dados em string 
    let cnpj1 = String(cnpj.value);
    let email1 = String(email.value);
    let telefone1 = String(telefone.value);
    let site1 = String(site.value);
    let descricao1 = String(descricao.value);
    let imagens1 = String(imagens.value);
    let senha1 = String(senha.value);

  
}
function mostrar() {
   
    let nomeAcademia = document.getElementById('nome_academia').Value;
    let table = window.document.getElementById("res");
    db.transaction(function (tx) {
        tx.executeSql('SELECT * From empressas ', [], function (tx, resultado) {
          
            var rows = resultado.rows;
            var tr = '';
            for (var i = 0; i < rows.length; i++){
                tr += '<tr>';
                tr += '<td>' + rows[i].nomeAcademia + '</td>';
                tr += '<td>' + rows[i].cnpj + '</td>';
                tr += '<td>' + rows[i].email + '</td>';
                tr += '<td>' + rows[i].telefone + '</td>';
                tr += '<td>' + rows[i].site + '</td>';
                tr += '<td>' + rows[i].descricao + '</td>';
                tr += '<td>' + rows[i].imagens + '</td>';
                tr += '<td>' + rows[i].senha + '</td>';
                tr += '</tr>';


            }
            table.innerHTML = tr;

        });
         },null);


    }



