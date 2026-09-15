<?php
$id = $_GET['id'];
$conexão = mysqli_connect('localhost','root','','aulaphp');
$busca = mysqli_query($conexão,"SELECT*FROM aluno WHERE id ='$id'");
$resultado = mysqli_fetch_array($busca);

?>
<form action="gravarAlt.php" method="POST">
Nome:
<input type="text" name="nome" value="<?php echo $resultado['nome'];?>"/>
<br>
E-Mail:
<input type="text" name="email" value="<?php echo $resultado['E-mail'];?>"/>
<br>
<input type="submit" value="Enviar>
</form>
