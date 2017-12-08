<!DOCTYPE html>
<html>
<body>
 
  <?php 
 // session_start();// Inicia a session para receber o id do usuario e posteriormente colocar na tabela usuario_servico
  $conn = new mysqli("localhost", "root", "", "pratica05"); //estabelecer conexão com o banco
  if($conn->connect_error){// testa a conexão
    die("Connection failed: " . $conn->connect_error);
  }
    
     $sql = "SELECT * FROM usuario where email='$_POST[email]'";
     $result = $conn->query($sql);
  
    if ($result->num_rows == 0 ) 
    {
        $password = sha1($_POST['senha']);
        $sql = "INSERT INTO usuario (nome_profissional,nome_empresa , email, endereco, contato, extra, senha) VALUES ('$_POST[nome_profissional]', '$_POST[nome_empresa]' , '$_POST[email]',  '$_POST[endereco]', '$_POST[contato]', '$_POST[extra]','$password')";
        //$idU = "SELECT id FROM usuario"; // recebe o id do novo usuario cadastrado ?Esse id será o id do usuário cadastrado acima?
       // $_SESSION["idU"];// passa o id pra sesssion  
      //header("Location: ../html/escolhadeservico2.php"); /* Redirect browser */
       //exit();  
     } 
  
       
  else {
       echo "Email não inserido ou já cadastrado";
       echo "<p><a href='/pratica05/html/Cadastrousuario1.php'>Voltar pro Cadastro</a></p>";
  }
  
  if($conn->query($sql) === TRUE)
  {
      echo "Usuario cadastrado com sucesso!";
      header("Location: ../view/escolherservico.php"); 
      exit();
       /*
       $conn1 = new mysqli("localhost", "root", "", "pratica05"); //estabelecer conexão com o banco
    
       if($conn1->connect_error)
       {// testa a conexão
       die("Connection failed: " . $conn1->connect_error);
       }
    
      $sql = "SELECT * FROM usuario where email='$_POST[email]'";
      $idU = "SELECT * FROM usuario where id";// recebe o id do novo usuario cadastrado ?Esse id será o id do usuário cadastrado acima?
      $_SESSION["idU"];// passa o id pra sesssion  
    */  
    } 
  
    else
    {
      echo "Erro ao cadastrar usuario: " . $sql . "<br>" . $conn->error;
    }
  
    echo "<p><a href='/pratica05/html/Cadastroservico2.html'>Cadastrar Servico</a></p>";
    echo "<p><a href='/pratica05/html/telainicial.php'>Tela Inicial</a></p>"; // Link da tela inicial 
    $conn->close();
  ?>
  
</body>
</html>
