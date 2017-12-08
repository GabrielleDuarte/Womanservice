<!DOCTYPE html>
<html>

				<head>
 				    <title>cadastrousuario</title>
            <meta charset="UTF-8c">
           <link rel="stylesheet" type="text/css" href="../css/teste.css">
       </head>

	<body>
   	<div class = "divcentral">
		 <a href="telainicial.php"><h1> Woman's Service </h1></a> 
			 <a href="Login.html">Login</a>
  	<header>
  
      <nav>
        <ul>      
          <li><a class = 'cabe' href="./Login.html"> Cadastro Usuario </a></li>
        </ul>
      </nav>
  </header>
   
 
        <form action="../sql/cadastrarusuario.php" method="post">
          <fieldset>
          <legend>Cadastrar Dados de Usuario:</legend>
            <h2> E-mail:<br> </h2>
            <input type="text" name="email" value="">
            <br>
            <h2>Nome do Profissional:<br></h2> 
            <input type="text" name="nome_profissional" value="">
            <br>
             <h2>Nome da Empresa:<br></h2> 
            <input type="text" name="nome_empresa" value="">
            <br>
             <h2>Endereco:<br></h2> 
            <input type="text" name="endereco" value="">
            <br>
             <h2>Contato:<br></h2> 
            <input type="text" name="contato" value="">
            <br>
						 <h2>Extra:<br></h2> 
            <input type="text" name="extra" value="">
            <br>
            <h2>Senha:<br></h2>
           <input type="password" name="senha" value="">
            <br><br>
            <input type="submit" value="Cadastrar Usurario"> 
	
          </fieldset>
     </form>
  
    
  </div>
  </body>
</html>
