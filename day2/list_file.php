<h3>list Fiel</h3>


<?php
    $array = scandir(".");

?>

<ul>
    <?php
        foreach ($array as $item){
            echo "<li>".$item."</li>";
        }
    ?>
</ul>