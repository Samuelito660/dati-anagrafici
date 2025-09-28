<?php

$nome = $_GET['name'];
$cognome = $_GET['surname'];
$indirizzo = $_GET['address'];
$telefono = $_GET['cell'];
$prodotti = $_GET['products'];
$num_prodotti = $_GET['n_products'];
$costo_prod = 0;

echo "<h3>Nome : " . $nome . "<br></h3>"; 
echo "<h3>Cognome : " . $cognome . "<br></h3>";
echo "<h3>Indirizzo : " . $indirizzo . "<br></h3>";
echo "<h3>Telefono : " . $telefono . "<br></h3>";
echo "-------------------------------------------------<br><br>";
echo "Hai deciso di acquistare il seguente prodotto : " . $prodotti . "<br>";
echo "Numero di prodotti acquistati : " . $num_prodotti . "<br>";

if ($prodotti == "mela") {
    $costo_prod = 2;
} elseif ($prodotti == "pera") {
    $costo_prod = 3.2;
} elseif ($prodotti == "banana") {
    $costo_prod = 1.5;
} else {
    echo "Prodotto non disponibile";
}



echo "Totale da pagare (IVA esclusa) : " . $num_prodotti*$costo_prod . " euro<br><br>";

echo "Totale da pagare : " . $num_prodotti*$costo_prod*1.22 . " euro<br>";


?>