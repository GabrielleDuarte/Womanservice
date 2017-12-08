<!DOCTYPE html>
<html>
   <head>
      <title>SucessoLogin</title>
      <?php include '_cabecalho.php';?>
   </head> 
     
   <body>

    <?php
    
      //consulta SQL 
      $query = "SELECT * FROM usuario";
      //resultado da consulta
      $result = $conn->query($query);
    
      $logado = false;
      //Dados retornados do formulário - página anterior(index.html - login)
      $senha = $_POST['senha'];
      $email = $_POST['email'];
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          if(sha1($senha)==$row["senha"] && $email==$row["email"]) {
            $logado=true;
             $_SESSION["logged"]=true;
             $_SESSION["user.name"]=$row["nome"];
             $_SESSION["user.email"]=$row["email"];
             $_SESSION["user.roles"]=array(); 
             //$busca = "SELECT usuario_papel.id, usuario.id AS uid, usuario.nome AS unome, papel.id AS pid, papel.nome AS pnome FROM usuario, papel, usuario_papel WHERE usuario.id = usuario_papel.usuario_id AND papel.id = usuario_papel.papel_id AND usuario.id='".$row["id"]."';";
             $resultado = $conn->query($busca);
             if ($resultado->num_rows > 0) {
               while($linha = $resultado->fetch_assoc()) {
                   array_push($_SESSION["user.roles"],$linha["pnome"]);
               }
             }
            
            break;
          }
        }
      }
      if($logado==true) {
         header('Location: index.php');
      } else {
        echo "Senha ou Email inexistente";
      }
      $conn->close();
    ?>
  </body>
</html>