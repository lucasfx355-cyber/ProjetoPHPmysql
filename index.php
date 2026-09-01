<?php
$conexão = mysqli_connect('localhost','root','','aulaphp');
$busca = mysqli_query($conexão,"SELECT*FROM aluno");
echo "
    <table border=1>
    <tr>
    <td>Nome</td>
    <td>Email</td>
    <td>Excluir</td>
    </tr>
    ";
while($resultado = mysqli_fetch_array($busca)){
    echo "<tr>";
    echo "<td>".$resultado['nome']."</td>";
    echo "<td>".$resultado['email']."</td>";
    echo "<td><a href=excluir.php?id=".$resultado['id'].">Excluir</a></td>";
    echo "</tr>";
}
echo "</table>";
?>