<?php 
/* 
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    ; 
*/

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if ( strlen($name) > 5 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)) {
    echo "Accesso Riuscito!";
} else if (strlen($name) < 5) {
    echo "inserisci un nome maggiore di 5 caratteri!";
} else if (!strpos($mail, "."))  {
    echo "inserisci almeno un punto!";
} else if (!strpos($mail, "@"))  {
    echo "inserisci una chiocciola!";
} else if (!is_numeric($age))  {
    echo "inserisci almeno un numero!";
};

?>
