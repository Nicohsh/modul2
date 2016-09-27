<?php

$harambe = htmlentities("a<b>c");
$countryCode = "se";
$x = "0";

?>
<!doctype HTML>
<html>
    <head>
        <title>Echo-opgave</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            echo $harambe;
        echo '<br><br>';
        
            switch ($countryCode){
                    
                case 'se':
                    echo 'Sweden';
                    break;
                    
                case 'dk':
                    echo 'Denmark';
                    break;
                    
                default:
                    echo 'Unknown CC';
            }
        
        echo '<br><br>';
        
           if ($countryCode == 'dk'){
                echo 'Denmark';
            }
            else {
                echo 'Sweden';
        }
        
        echo '<br><br>';
        
        for ($i=0; $i<=100; $i=$i+10){
            echo $i.'<br>'.PHP_EOL;
        }
        
        echo '<br><br>';
        
        $petlist = array('kat', 'hund', 'hest', 'flodhest');
        
        foreach ($petlist as $pet){
            echo 'My pet is '.$pet. '<br>'.PHP_EOL;
        }
        
        echo '<br><br>';
        
        
        function printtable($i){
            echo 'weee '.$i.PHP_EOL;
        }
        printtable(5);
        printtable(51);
            
        
        ?>
    </body>
</html>