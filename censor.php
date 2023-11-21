<?php 
$default_text = "In fisica, la velocità della luce è la velocità di propagazione di un'onda elettromagnetica e di una particella libera senza massa nel vuoto. Ha un valore di 299792458 m/s. Viene indicata normalmente con la lettera c (dal latino celeritas), scelta fatta per primo da Paul Drude nel 1894[2]. Secondo la relatività ristretta, la velocità della luce nel vuoto, è una costante fisica universale indipendente dal sistema di riferimento utilizzato e la velocità massima a cui può viaggiare qualsiasi informazione nell'universo, unendo le grandezze fisiche classiche di spazio e tempo nell'unica entità dello spaziotempo e rappresentando la grandezza di conversione nell'equazione di equivalenza massa-energia. Nella relatività generale è la velocità prevista per le onde gravitazionali.";

$text = $_POST["nuovo_testo"];

$name = $_POST["parola_da_censurare"];

$censored_text = str_ireplace($name, '***', $text);
?>

<p><strong>Il testo da censurare è:</strong> <?php echo $text ? $text : $default_text ?></p>

<h3>Il testo è lungo: <?php echo strlen($text) ?> caratteri.</h3>

<h1>La parola da censurare è: <?php echo $name ? $name : 'Non hai scelto nessuna parola' ?>.</h1>

<p><strong>Il testo censurato è:</strong> <?php echo $censored_text ? $censored_text : $default_text ?></p>

<h3>Il testo censurato è lungo: <?php echo strlen($censored_text) ?> caratteri.</h3>
