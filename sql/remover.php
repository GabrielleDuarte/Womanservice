<!DOCTYPE html>
<html>
   <head>
      <title>Prática 05 - Remover</title>
      <?php include '../_cabecalho.php';?>
   </head> 
     
   <body>
      <?php include '../_navbar.php';?>
      	<?php
            	
                $query = "DELETE FROM usuario WHERE id=".$_GET['id']; 
                if ($conn->query($query) === TRUE) {
                    echo "<p>Usuário removido com sucesso!</p>";
                } else {
                    echo "Erro removendo usuário: " . $conn->error;
                }
                echo "<a href='listar.php'>Listar Usuários</a>";
                $conn->close();
        ?>
      
    	</body>
</html>