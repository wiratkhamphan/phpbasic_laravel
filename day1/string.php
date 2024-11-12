<?php
$name = "Jonn";
?>


<h3>String Funtions</h3>
<div>Count: <?php echo strlen($name);?></div>
<div>Indexof :<?php echo strpos($name,"0")?></div>
<div>Uppercase :<?php echo strtoupper($name)?></div>
<div>Lowercae :<?php echo strtolower($name)?></div>
<div>Replace: <?php echo str_replace("Jonn","lek",$name)?></div>
<div>Substrimg : <?php  echo substr($name,0,3)?></div>