
<?php
     function hello(){
        echo 'hello word';
     };
?>

<?php 
    
    $nome = ('brenda');
    
    function nome_funcao($nome){

     echo 'hello {$nome}';

    };

?>

<?php 
 $nomes = ['brenda', 'dudu', 'rafa', 'gugu', 'jojo','pedro'];
 
 echo''.$nomes[5].'';
 
?>

<?php 
  $numeros = ['-2','-1','0','1','2'];

?>

<?php 
  $numeros = ['-2','-1','0','1','2'];

  function numero($numeros){
     if($numeros >= 0){

     echo ' os numeros positivos são: {$numeros}';
   
     }else{
      echo ' os numeros negativos são: {$numeros}';
     };

  };
?>



  <?php 
   $nomezinho = ['brenda', 'dudu', 'rafa','gugu'];

  ?>

<?php 
  $informacoes = ['brenda', 15,'informatica', 'rafa',16,'informatica', 'gugu',17,'biotec'];
   echo 'as informacoes desse aluno sao' = $informacoes['brenda',15,'informatica'];
   <br>
   echo 'as informacoes desse aluno sao' = $informacoes['rafa',16,'informatica'];
   <br>
   echo 'as informacoes desse aluno sao' = $informacoes['gugu', 17, 'biotec'];
?>


<?php

$idades = ['18','9','16','20'];

function idade($idades){
 if($idades >= 18){
   echo 'voce é maior de idade';
 }else{
   echo'menor de idade';
 }
};

?>

<?php 
 $cursos = [
     ['informatica']
     ['biotec']
     ['enfermagem']

 ];

 function indormacaocurso($cursos){
    if($cursos = informatica){
      echo 'seu curso e informatica';
    }
    else{
      echo 'seu curso nao e informatica';
    }


 };

?>