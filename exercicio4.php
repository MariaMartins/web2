<?php

$vetor= array();

for($i=0; $i<50; $i++){
    if ($i%2==0){
     $vetor[$i]= $i;  
    }
 
    
}

echo "<pre>";
print_r ($vetor);
