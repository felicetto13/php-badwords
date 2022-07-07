<?php

$par = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Inventore ea laboriosam repudiandae tempore qui similique! Amet, dicta! 
Beatae possimus, architecto labore nemo, delectus et quidem quia a reprehenderit, omnis doloribus.
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Inventore ea laboriosam repudiandae tempore qui similique! Amet, dicta! 
Beatae possimus, architecto labore nemo, delectus et quidem quia a reprehenderit, omnis doloribus.
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Inventore ea laboriosam repudiandae tempore qui similique! Amet, dicta! 
Beatae possimus, architecto labore nemo, delectus et quidem quia a reprehenderit, omnis doloribus.";

$censured_word = $_GET["censured_word"];


?>

<h1>Il paragrafo inserito è:</h1>
<p><?php echo $par ?></p>
<span>La sua lunghezza è di <?php echo strlen($par); ?></span><br>

<span><strong>Parola da censurare:</strong> <i><?php echo $censured_word; ?></i></span>

<h1>Il paragrafo censurato è:</h1>
<p><?php echo $par = str_ireplace($censured_word,"***",$par); ?></p>