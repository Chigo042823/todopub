<?php

use Todo\classes\itemscontrol;
use Todo\classes\itemsview;

    require realpath('vendor/autoload.php');
    require 'header.inc.php';

    $id = $_GET['id'];
    $view = new itemsview();
    $item = $view->editItem($id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $control = new itemscontrol();
        $edit = $control->editItem($id, $_POST);
    }

?>
<center>
    <form action="#" method="POST">
        <div class="mb-3">
            <br>
            <h2>Edit Item</h2>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value="<?php echo $item['description'] ?>">
            <br>
            <button type="submit" class="btn btn-outline-info">Edit</button>
            <a href="index.php" class="btn btn-outline-secondary">Back</a>
        </div>
    </form>
</center>
</html>