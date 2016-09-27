<!-- Herunder i dette PHP-tag definerer vi at variablen $curpage skal indikere hvilken side vi befinder os på. Den vil vi så benytte til at lave en class der hedder "active" som vil bruges til at vise hvilken underside i menuen vi befinder os på -->

<?php  
$curpage = basename($_SERVER['PHP_SELF']);
?>

<!doctype HTML>
<html>
    <head>
        <title>Modul 2 - Assignment 1 - PHP menu</title>
        <meta charset="utf-8">
        
        <!-- Her har jeg tilføjet et reset-bibliotek for at simplificere noget styling og annullere nogle standard margins/paddings -->
        <link rel="stylesheet" href="css/reset.css">
        
        <!-- Jeg vælger at have mit personlige stylesheet nederst, så jeg sørger for at mine CSS-regler bliver læst sidst, så de overgår nogle CSS-regler i reset-dokumentet. -->
        <link rel="stylesheet" href="css/menu.css">
        
    </head>
    
    <body>
        
        <!-- Her laves en include på min menu. Det gør det desuden lettere at ændre i menu'en, ift. hvis der lå individuelle menu'er på alle undersider. -->
        <?php include 'menu.php';?>
        
        <h1>This is the third page.. Is that even possible?!</h1>
    </body>
</html>