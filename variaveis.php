<?php
/** Variáveis no php são case-sensitivie. 
* Devem começar com underscore ou letra minúsula.
*/
    $_He4rt = 'Eu ';
    $he4rt = 'to ';
    $he4rT = 'com ';
    $_HE4RT = 'FOME';
    echo $_He4rt . $he4rt . $he4rT . $_HE4RT . "\n";

?>

<?php
// Definindo constantes.

define("HAYLEY", "https://twitter.com/yelyahwilliams");
    echo "Follow de queen " . HAYLEY . PHP_EOL;
?>
