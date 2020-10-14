<?php include("config.php"); ?>
<?php

        if($_POST["ilce_id"]!="")
        {
            $sql_semtler = $mysqli->query("SELECT * FROM semtler WHERE ilce_id=".$_POST["ilce_id"]." ORDER BY id ASC;");
            while($semtler = $sql_semtler->fetch_array(MYSQLI_ASSOC))
            {
                echo '<option value="'.$semtler["id"].'" >'.$semtler["semt_adi"].'</option>';
            }
        }


?>

