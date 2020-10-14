<?php include("config.php"); ?>
<?php
        if($_POST["il_id"]!="")
        {
            $sql_ilceler = $mysqli->query("SELECT * FROM ilceler WHERE il_id=".$_POST["il_id"]." ORDER BY id ASC;");
            while($ilceler = $sql_ilceler->fetch_array(MYSQLI_ASSOC))
            {
                echo '<option value="'.$ilceler["id"].'" >'.$ilceler["ilce_adi"].'</option>';
            }
        }


?>

