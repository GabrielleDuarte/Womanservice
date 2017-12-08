<html>
<body>
  <?php 
							
            // FAZER CONEXÇÃO COM O SERVICO E O USUARIO E COLOCAR OS IDS NA USUARIO_SERVICO
              $conn = new mysqli("localhost", "root", "", "pratica05");
              if($conn->connect_error)
               { // Testar se a conexão tá funcionando 
               die("Connection failed: " . $conn->connect_error); // Notificar falha na conexão
               }
							$result = $conn->query("SELECT id FROM usuario ORDER BY id DESC LIMIT 1"); // pega o ultimo id cadastrado no usuario
							$idUsuario = implode($result->fetch_assoc()); // coloca or esultado da query em uma variavel
							$idServico = $_POST['servico']; // recebe por post o item escolhido na pagina anterior
              
							$sql = "INSERT INTO usuario_servico (id_usuario, id_servico) VALUES ('$idUsuario', '$idServico')"; // insere os valores no banco
              
							if ($conn->query($sql) === TRUE) {
									echo "New record created successfully";
							} else {
									echo "Error: " . $sql . "<br>" . $conn->error;
							}

	
              $conn->close();
             header("Location: ../view/Login.html"); /* Redirect browser */
 
  ?>
  
    
</body>
</html>