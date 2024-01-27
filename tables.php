<?php
$hp=['libelle'=>'hp dv7','prix'=>9000,'qte'=>100];
$dell=['libelle'=>'dell s7','prix'=>7000,'qte'=>0];
$sony=['libelle'=>'sony vaio v9 ','prix'=>10000,'qte'=>5];
$stocks=[$hp,$dell,$sony];
// executer le code suivant :
//1-
echo $dell['qte'];
// 0
//2 -
echo $hp['marque'];
// hp dv7
//3-
$dell['marque']='DELL';
echo $dell['marque'];
// dell s7
//4-
echo $stocks[0]['prix'];
// 9000
//5-
echo ($stocks[1]['qte']===0)? "A":"B";
// 0
//6-
$acer=$sony;
$acer['libelle']='acer a4';
$acer['qte']-=4;
$acer['prix'] *=2;
$stocks[]=$acer;
echo $stocks[count($stocks)-1]['libelle'];
echo $stocks[count($stocks)-1]['qte'];
echo $stocks[count($stocks)-1]['prix'];
// acer4
// 1
// 20000


// 7-
foreach ($stoks as $k => $v) {
 foreach ($v as $x => $p) {
    if($x=='qte' && $p!=0)
    echo "<h2>$x : $p </h2>";
 }
}



?>
<!-- 3.org/1999/xhtml"> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <table class="table table-dark">
        <?php
        echo '<tr>';
        echo '<th scope="col">Libellé</th>';
        echo '<th scope="col">Quantité</th>';
        echo '</tr>';
        foreach ($stocks as $produit){
            echo '<tr>';
            echo '<td>' . $produit["libelle"] . '</td>';
            // Affichage de la quantité si elle est supérieure à zéro sinon on
            // affiche "En rupture de stock".
            $qt = $produit['qte'] > 0 ? $produit['q
            e'] : "En rupture de Stock";
            echo '<td>' . $qt . '</td>';
            echo '</tr>';
            }

            
        
        
        ?>


       
        
  
</table>
</body>
</html>
   


