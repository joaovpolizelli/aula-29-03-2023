
<?php
#### ESTRUTURA DE DECISÃO

$usuario = 'admin';
$senha = 321;

if($usuario == 'admin' && $senha == 321){
echo "Acesso liberado";
}else{
echo "Usuário ou senha inválido";
}

echo "<br> <br>";

#### ESTRUTURA DE REPETIÇÃO & ARRAY

$produtos = ['👟','👠','🎮','🌭', '🥩', '🍷']; # Array
echo $produtos[5];
echo $produtos[3];
echo count($produtos);

echo "<br> <br>";

$i = 0;
while( $i < count($produtos)){
echo $produtos[$i];
$i++; // $i = $i + 1
}
 ?>



