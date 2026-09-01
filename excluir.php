<?php
$id = $_GET['Id'];
$con = mysqli_connect('localhost', 'root', 'aulaphp');
mysqli_query ($con, "Delete from aluno where id = '$id' ");
hearder ("location:buscar.php")

?>
