<?php
    require("config.php");
    $pid = $_GET['pid'];

    $q = "select * from images where id = $pid";
    $result=$con->query($q);
    $data = $result->fetch_assoc()
?>
<form action="update_action.php" method="post" enctype='multipart/form-data'>
        <p>Product name : <input type="text" name="pname" value="<?php echo $data['pname']; ?>" /></p>
        <p>Product address : <input type="text" name="paddress" value="<?php echo $data['paddress']; ?>"/></p>
        <p>Product phone : <input type="text" name="pphone" value="<?php echo $data['pphone']; ?>"/>
        <p>Product price : <input type="text" name="pprice" value="<?php echo $data['pprice']; ?>"/>
        <p>Product image : <input type="file" name="pimage" value="<?php echo $data['pimage']; ?>"/>
        <P><input type="hidden" value="<?php echo $data['id']; ?>" name='id' /> </p>

        <p><input type="Submit" name="add_inventory"/></p>
</form>