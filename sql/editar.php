<!DOCTYPE html>
<html>
   <head>
      <title>Prática 05 - Editar</title>
      <?php include '../_cabecalho.php';?>
   </head> 
     
   <body>
      <?php include '../_navbar.php';?>
      	<?php
            
             
              if(isset($_POST['nome'])) {
                
                  //executa a query
                  $sql = "";
                  if(strlen($_POST['senha'])>0) {
                     $senha = sha1($_POST['senha']);
                     $sql = "UPDATE usuario SET nome='".$_POST['nome']."', email='".$_POST['email']."',senha='".$senha."' WHERE id='".$_POST['id']."'";
                     echo "<p> Atualizando...nome, email e senha</p>";
                  } else {
                     $sql = "UPDATE usuario SET nome='".$_POST['nome']."', email='".$_POST['email']."' WHERE id='".$_POST['id']."'";
                    echo "<p> Atualizando...nome e email </p>";
                  }
                  if ($conn->query($sql) === TRUE) {
                     echo "<p>Usuario Atualizado com sucesso!</p>";
                  } else {
                     echo "<p>Erro ao Atualizar usuario: " . $sql . "</p></br>" . $conn->error;
                  }
                echo "<a href='listar.php'>Listar usuários</a>";
              }else {
                $query = "SELECT * FROM usuario WHERE id=".$_GET['id']; 
                $result = $conn->query($query);
                echo "<h1> Editar Usuario ID: ".$_GET['id']."</h1>";

                if ($result->num_rows > 0) {
                  // output data of each row 
                  $row = $result->fetch_assoc();
                  echo "<form action='editar.php' method='post'>";
                  echo "   <div class='form-group'>";
                  echo "      <label for='nome'>Nome:</label>";
                  echo "      <input type='text' class='form-control' id='nome' name='nome' value='".$row["nome"]."'>";
                  echo "   </div>";
                  echo "   <div class='form-grou'>";
                  echo "      <label for='email'>Email address:</label>";
                  echo "      <input type='email' class='form-control' id='email' name='email' value='".$row["email"]."'>";
                  echo "   </div>";
                  echo "   <div class='form-grou'>";
                  echo "      <label for='senha'>Senha:</label>";
                  echo "      <input type='password' class='form-control' id='senha' name='senha' placeholder='".$row["senha"]."'>";
                  echo "   </div>";
                  echo "      <input type='hidden' id='id' name='id' value='".$row["id"]."'>";
                  echo "   <button type='submit' class='btn btn-default'>Atualizar</button>";
                  echo "</form>";
                }
              }
        ?>
      
    	</body>
</html>