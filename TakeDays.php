
<?php
include "header.php";
include "index.php";
require_once "Days.php";

if (isset($_POST['firstWD'])||isset($_POST['search'])) {

    $firstWorkDay = $_POST['firstWD'];
    $start = new DateTime($firstWorkDay);
    $endD = $_POST['search'];
    $end = new DateTime($endD);

    $modifier = new DateModifier($start, $end);

    echo $modifier->calcWorkDay();
}

include "footer.php";
