<div>Read Json</div>

<?php 

    $josn = file_get_contents("product.json");
    $data = json_decode($josn,true);


?>


<table border="1">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php foreach ($data as $product){ ?>
        <tr>
            <td><?php echo $product["id"] ?></td>
            <td><?php echo $product["name"] ?></td>
            <td><?php echo $product["price"] ?></td>
        </tr>
        <?php } ?>
</table>