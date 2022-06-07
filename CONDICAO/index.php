<?php
//laço de repetição for
/*for ($contador=10; $contador>0 ; $contador--) { 
	# code...
	echo 'ola mundo';
	echo '<br />';
	echo $contador;
	echo '<hr>';
	
}*/

//laço de repetição while

/*$contador = 0;
while($contador < 10){
    echo 'alo mundo';
    echo '<hr>';
    echo $contador;
    $contador+=5;

}*/

/*
lço de repetição do
$contador = 0;


do{
   echo 'ola mundo';
   echo'<br  />';
   echo $contador;
   echo '<hr>;';
   $contador++;
}while ( $contador < 10);
*/

/*$conta = 10%2;

if($conta == 0){
	echo 'numero par';
}else{
	echo 'numero impar';
}*/

/*date_default_timezone_set('America/Sao_Paulo');

$data = date('d/m/Y H:i:s',time()+(60*10));

echo $data;*/
$titulo_site ='Titulo do meu Site';
include('header.php');


?>

<h1>Meu Conteúdo da home!</h1>

<?php
  include('footer.php');
?>