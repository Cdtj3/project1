<?php

require 'server.php';
$sql = "select fname from users";

try {
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    $result = $stmt->fetchAll();
}
catch(Exception $ex)
{
    echo ($e -> getMessage());
}
?>
<select>
    <option>naam</option>
    <?php foreach ( $result as $output) {?>
        <option><?php echo $output["fname"];?></option>
    <?php } ?>
</select>