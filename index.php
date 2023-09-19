<?php
function chargerClasse($nomDeClasse) {
        require_once($nomDeClasse.".php");
}
spl_autoload_register('chargerClasse'); 

$h = new head('bleu','aquilin','cousue');
$t = new tronc('M') ;
$j = new jambes('longues');

$b = new Body($h,$t,$j);

$b->getHead()->setYeux('marron');
echo "<pre>";
print_r($b);

?>





