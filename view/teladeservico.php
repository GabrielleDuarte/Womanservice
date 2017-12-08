<!DOCTYPE html>
<html>

				<head>
 				    <title>teladeservico</title>
            <meta charset="UTF-8c">
           <link rel="stylesheet" type="text/css" href="../css/teste.css">
       </head>

	<body>
   	<div class = "divcentral">
		 <a href="telainicial.php"><h1> Woman's Service </h1></a> 
			 <a href="Login.html">Login</a>
			<br>
			 <a href="Cadastrousuario1.php">Cadastrar-se</a>
  	<header>
      
       <?php
							//session_start();
			        //echo "Usuario logado: ".$_SESSION["logado"]."</br>";
			       // echo "id Usuario logado: ".$_SESSION["id"];
			    		$id_servico =  $_POST['servico'];
              // Abrir um select
              // Estabelecer Conexão com o banco de dados 
              $conn = new mysqli("localhost", "root", "", "pratica05");
              if($conn->connect_error)
							{ // Testar se a conexão tá funcionando 
               die("Connection failed: " . $conn->connect_error); // Notificar falha na conexão
  						}
 							
   	          $query = "SELECT * FROM servico WHERE id=".$id_servico;  // selecionar tudo da tabelo 'servico'
					 
            	$result = $conn->query($query); // passar os dados da conexão para a variavel 'result'
						$query1 = "SELECT * 
														FROM  `usuario` 
														INNER JOIN usuario_servico us ON usuario.id = us.id_usuario    
														WHERE id_servico =".$id_servico; 
									$result1 = $conn->query($query1);
   	          if ($result->num_rows > 0){
								 	while($row = $result->fetch_assoc()) // testar se teve algum resultado na busca 
              { 
               		echo "<h1>".$row['nome']."</h1><br>";
                  echo "<h2>".$row['descricao']."</h2><br>";
									}
									while($row1 = $result1->fetch_assoc()){
																			
											echo "<h3>Nome do Profissional: ".$row1['nome_profissional']."</h3>";
                 			echo "<h3>Nome da Empresa: ".$row1['nome_empresa']."</h3>";
										  echo "<h3>Endereco: ".$row1['endereco']."</h3>";
										  echo "<h3>Contato: ".$row1['contato']."</h3>";
											echo "<h3>Extra : ".$row1['extra']."</h3><br>";
									}	 
							}
            	 else {
               	echo "0 Resultados";
            	}
            	
   	         
            	$conn->close(); // fecha conexão com o bando de dados
      
      
      
   	 ?>