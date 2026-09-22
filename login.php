<?php
$email $_POST['email'];
$senha $_POST['senha'];
$con = mysqli_connect('localhost', 'root','', 'aulaphp' );
$busca =mysqli_query($con,"Select*from aluno where email='$email' and  senha ='$senha'");
$contagem= mysqli_num_rows($busca);
if($contagem==1){
//logada
echo "Está logada"
}else{
    echo"não está logada"
//não estiver logada
}


?>