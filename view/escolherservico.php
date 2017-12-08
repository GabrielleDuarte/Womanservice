<!DOCTYPE html>
<html>
<head>
     <title>escolhaservico</title>
    <meta charset="UTF-8c">
    <link rel="stylesheet" type="text/css" href="../css/teste.css">
</head>

<body> 
   <a href="telainicial.php"><h1> Woman's Service </h1></a> 
   <a href="Login.html">Login</a>
   
     <header>
      <nav>
        <ul>      
          <h1>
           Cadastro de Servico: 
          </h1> 
        </ul>
      </nav>
  </header>
            
     
            <h2>
            Servico
             </h2>
		 			   <form action="../sql/sqlcadastroservico.php" method="post">
						 <fieldset>
            <select name="servico"> 
          <?php
							// ORGANIZAR O CADASTRO DO USUÁRIO
							//Página destinada a escolha do servico já cadastrado anteriormente 
						
              // Estabelecer Conexão com o banco de dados 
              $conn = new mysqli("localhost", "root", "", "pratica05");
              if($conn->connect_error)
               { // Testar se a conexão tá funcionando 
               die("Connection failed: " . $conn->connect_error); // Notificar falha na conexão
               }
    
   	          $query = "SELECT * FROM servico";  // selecionar tudo da tabela 'servico'
					 
            	$result = $conn->query($query); // passar os dados da conexão para a variavel 'result'
   	          if ($result->num_rows > 0) // testar se teve algum resultado na busca 
              { 
               	// output data of each row 
               	while($row = $result->fetch_assoc()) { // enquanto houver algo na variável result, ou seja, percorre a variável 
									
                 	echo "<option name='servico' value=".$row["id"].">".$row["nome"]."</option> "; // cria o option com os resultados da variável  
              }
							}
             $conn->close();//fecha a conexão 
     	     ?>
							</select>
						  <input type="submit" value="Cadastrar Servico">  
         			</fieldset>
         			</form> 
	</body>
	</html>