<?php

function drawMonster(int $type, int $size):void {

?>



 <img src="Monster<?= $type; ?>.jpg" style="width: <?= $size; ?>px; height: <?= $size; ?>px;"> 


<?php
}