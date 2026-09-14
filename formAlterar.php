<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root' , 'aulaphp');
mysqli_query($con, "Select * from  aluno where id = '$id'");
$resultado = mysqli_fetch_array($busca);

?>
<form action= "GravarAlt.php" method="POST">
    Nome:
<input type="Text" name="nome" value="<?php echo $resultado['nome']"; ?php>
<br>
email
<input type="Text"  name "email" value="<?php echo $resultado['email'];
<br>
<input type="Submit" value="Enviar Dados"/>