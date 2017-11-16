<?php include "connection.php"; ?>
<?php
     $nome=$_POST['nome'];
     $email=$_POST['email'];
     $website=$_POST['website'];
     $comentario=$_POST['comentario'];
?>

<?php
     $insert = "INSERT INTO comentarios_tb(nome, email, website, comentario)
	 VALUES('$nome', '$email', '$website', '$comentario')";
	 $query = mysql_query($insert);
	 echo "<center><h1>Obrigado, seu depoimento foi enviado</h1></center>";
?>