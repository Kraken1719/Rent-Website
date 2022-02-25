<?php
if(isset($_POST['add_inventory'])){
    $pname = $_POST['pname'];
    $paddress = $_POST['paddress'];
    $pphone = $_POST['pphone'];
    $pprice = $_POST['pprice'];
    $pimage = $_POST['pimage'];

    echo $file_name = $_FILES['pimage']['name'];
    echo $fs = $_FILES['pimage']['name'];
    echo $type = pathinfo($fn,PATHINFO_EXTENSION);

    $query = "insert into images (id, pname, paddress, pphone, pprice, pimage)
    values (null, '$pname', '$paddress', '$pphone', '$pprice', '$pimage')";
    $con->query($query);
    header("location:update.php");
}




?>