<html>
    <head>
   	 <title></title>
    </head>
    <body>
   	 <?php
             session_start();
                        //host, user, senha, banco     
            	$conn = new mysqli("localhost", "root", "", "pratica05");
            	if ($conn->connect_error) {
               	die("Connection failed: " . $conn->connect_error);
            	}
   	          $query = "SELECT * FROM usuario";
            	$result = $conn->query($query);
              $logou = false;
      
   	          if ($result->num_rows > 0) {
               	// output data of each row
               	while($row = $result->fetch_assoc()) {
                  
                  if($_POST['email'] == $row["email"] && sha1($_POST['senha']) == $row['senha'])
                  { 	
                  echo "Bem Vindo ao Sistema<br>";
                     $logou=true;
                     $_SESSION["logado"] = $logou;
                     $_SESSION["id"] = $row["id"];
                     header("Location: ../view/teladeservico.php"); // Redirecionar a página 
                     exit();
                  }
                  }
                
              }
               if($logou==false)
                  {
                   $_SESSION["logado"] = $logou;
                   echo "Senha invalida<br>";
                   header("Location: ../html/Login.html"); // Redirecionar a página 
                   exit();
                 	}
                  
            
            	$conn->close();
   	 ?>
    </body>
</html>