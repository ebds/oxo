<?php
$snes = '../../data/snes.xml';
if (file_exists($snes)) {
    $xml = simplexml_load_file($snes);

    print_r($xml);
} else {
    exit('Konnte test.xml nicht öffnen.');
}
?>
