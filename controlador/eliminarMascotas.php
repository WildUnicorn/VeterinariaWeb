
?>

<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    require_once "../bd/Data.php";
    $d = new Data();
    $d->eliminarMascota($id);
}

header("location: ../menu.php");
?>
