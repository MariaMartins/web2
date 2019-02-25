<?php

$vetor= array();
$soma= 0;
$media= 0;
$maior= 0;
$posiçao= 0;
for($i=0; $i<31; $i++){
    $vetor[$i]= $i;
    $soma= $vetor[$i]+$soma;
    
   if($vetor[$i]>$maior){
       $maior= $vetor[$i];
       $posiçao= $i;
   }
   
   $media= $soma/count ($vetor);
}

echo $soma ."<br>";
echo $maior."<br>";
echo $posiçao."<br>";
echo $media."<br>";