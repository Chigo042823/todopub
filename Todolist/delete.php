<?php

use Todo\classes\itemscontrol;
use Todo\classes\itemsview;

    require realpath('vendor/autoload.php');
    require 'header.inc.php';

    $id = $_GET['id'];

    $view = new itemsview();
    $item = $view->editItem($id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo 'sub';
        $cont = new itemscontrol();
        $delete = $cont->deleteItem($id);
    }
?>
<center>
    <form action="#" method="POST">
        <div class="mb-3">
            <br>
            <h2>Edit Item</h2>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value="<?php echo $item['description'] ?>" readonly>
            <br>
            <button type="submit" class="btn btn-outline-danger">Delete</button>
            <a href="index.php" class="btn btn-outline-secondary">Back</a>
        </div>
    </form>
</center>
</html>