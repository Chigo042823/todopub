<?php
use Todo\classes\itemsview;

    require realpath('vendor/autoload.php');
    require 'header.inc.php';
?>
    <br>
    <h2>Things to do</h2>
    <?php
        $view = new itemsview();
        $items = $view->listItems();
        foreach ($items as $item): 
        $id = $item['id'] + 1;
    ?>
    <div class="card" id="items">
        <div class="card-body">
            <a href="edit.php?id=<?php echo $item['id'] ?>" class="btn btn-outline-info" id="left">Edit</a>
            <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn btn-outline-danger">Delete</a>
            <?php echo $item['description'] ?>
        </div>
    </div>
    <?php endforeach ?>
    <br>
    <a href="add.php?id=<?php echo $id; ?>" class="btn btn-outline-success" id="insert">Add Item</a>
</body>
</html>