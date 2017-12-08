<!DOCTYPE html>
<html>
<head>
<title> telainicial </title>
  <meta charset="ISO-8859-1">
   <link rel="stylesheet" type="text/css" href="../css/teste.css">
</head> 

  <body>
   <div class = "divcentral">
		 	<p>
				 Woman's Service
			</p>
		  <a href="Login.html">Login </a>
	
  <header>
  
      <nav>
        <ul>      
          <li><a class = 'cabe' href="telainicial.php"> Woman's Service </a></li>
					<p>
													 O Woman's Service e um site voltado para a divulgacao 
	e o enaltecimento de servicos oferecidos por mulheres para mulheres. Visando criar um ambiente seguro e confortavel 
						 para elAs nos disponibilizamos a melhor listagem de servicos e empresas com esse diferencial.  
					</p><br> 
					
					<h2>
						Escolha o Servico:
					</h2>
					   <form action="teladeservico.php" method="post">
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
						  <input type="submit" value="Ok">  
         			</fieldset>
         			</form> 
	
           <!--   // Abrir um select
              // Estabelecer Conexão com o banco de dados 
             /* $conn = new mysqli("localhost", "root", "", "pratica05");
              if($conn->connect_error){ // Testar se a conexão tá funcionando 
               die("Connection failed: " . $conn->connect_error); // Notificar falha na conexão
  }
    
							
   	          $query = "SELECT * FROM servico";  // selecionar tudo da tabelo 'servico'
					 
            	$result = $conn->query($query); // passar os dados da conexão para a variavel 'result'
   	          if ($result->num_rows > 0) // testar se teve algum resultado na busca 
              { 
               	// output data of each row 
               	while($row = $result->fetch_assoc()) { // enquanto houver algo na variável result, ou seja, percorre a variável 
								
									
									
								//	echo "<h1>o valor foi ".$row["nome"]."</h1>";
									
                 	//echo " $row["nome"] ;" // cria o option com os resultados da variável 
						      
										echo "<a href='teladeservico.php'>".$row["nome"].".</a><br><br><br>";
								} 
            	} else {
               	echo "0 Resultados";
            	}
            	$conn->close(); // fecha conexão com o bando de dados */
   	 ?>-->
						
		 <h3>
			 Trabalhe conosco, Cadastre seu Servico ou empresa:
		 </h3>
		 <a href="Cadastrousuario1.php">Cadastrar se</a>
		 
        </ul>
      </nav>
  </header>
      <h1>
				
		 </h1>
		</div>
	</body>
</html>
