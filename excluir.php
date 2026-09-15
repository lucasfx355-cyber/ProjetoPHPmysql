<?php
$id = $_GET['id'];
$conexão = mysqli_connect('localhost','root','','aulaphp');
mysqli_query($conexão,"DELETE FROM aluno WHERE id='$id'");
header ("Location:aulaphp.php")
?>
