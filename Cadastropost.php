<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <h1>Formulario:</h1>

        <p class="error">* Obrigatório</p>
    
       <form method="POST" action="">
       name: <input required name="nome" type="text"> <span class="error">*</span><br><br> 
       email: <input required name="email" type="email"><span class="error">*</span><br><br> 
       senha: <input required name="senha" type="password"><span class="error">*</span><br><br> 
       genero: <input required name="genero" value="masculino" type="radio"> masculino
       <input required name="genero" value="feminino" type="radio"> feminino
       <input required name="genero" value="outros" type="radio"> outros <span class="error">*</span><br><br> 
       comentario: <br><textarea required name="comentario" cols="30" rows="3"></textarea>
       <span class="error">*</span><br><br> 
       <button name="enviado" type="submit" >enviar</button>
     <h1>Dados enviados:</h1>
     <?php
        if (isset($_POST['enviado'])) {        
         echo "<p><b>Nome: </b>" . $_POST['nome'] . "</p>";
         echo "<p><b>email: </b>" . $_POST['email'] . "</p>";
         echo "<p><b>senha: </b>" . $_POST['senha'] . "</p>";
         echo "<p><b>genero: </b>" . $_POST['genero'] . "</p>";
         echo "<p><b>comentario: </b>" . $_POST['comentario'] . "</p>";
    }
     ?>
       </form>
</body>
</html>