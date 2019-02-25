<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $vetor=array();
         $vetor[0]= "Lucifer";
         $vetor[1]= "Gothan";
         $vetor[2]= "Friends";
         $vetor[3]= "How i met your mother";
         $vetor[4]= "Grey's anatomy";
         $vetor[5]= "The punisher";
         $vetor[6]= "Riverdale";
         $vetor[7]= "The vampire diaries";
         $vetor[8]= "Stranger things";
         $vetor[9]= "The end of the f**ing world";
        ?>
        <select> 
            <option> Série </option>
            <?php for($i=0; $i<10; $i++){ ?>
            
            <option> <?php echo $vetor[$i] ?> </option>
            
            <?php } ?>
        </select>
        
    </body>
</html>
