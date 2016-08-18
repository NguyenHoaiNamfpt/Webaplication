<?php
include './view/template/header.php';
include './control/Controller.php';
$ojbControl = new Controller();
$ojbControl->menu();
$ojbControl->control();
include './view/template/footer.php';
?>