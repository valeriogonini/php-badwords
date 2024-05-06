<?php

$parola = $_POST['parola'];
$testo = $_POST['testo'];
$newtext = str_replace($parola, '**', $testo);
?>

<p>
    Testo: <?php echo $testo; ?>
</p>
<p>
    Lunghezza: <?php echo strlen($testo); ?>
</p>
<p>
    Testo: <?php echo $newtext; ?>
</p>
<p>
    Lunghezza: <?php echo strlen($newtext); ?>
</p>