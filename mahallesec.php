<?php include("config.php"); ?>
<?php

        if($_POST["semt_id"]!="")
        {
            $sql_mahalleler = $mysqli->query("SELECT * FROM mahalleler WHERE semt_id=".$_POST["semt_id"]." ORDER BY id ASC;");
            while($mahalleler = $sql_mahalleler->fetch_array(MYSQLI_ASSOC))
            {
                echo '<option value="'.$mahalleler["id"].'" >'.$mahalleler["mahalle_adi"].' ('.$mahalleler["posta_kodu"].')</option>';
            }
        }


?>

