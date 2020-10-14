<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>İl İlçe Semt Mahalle Database</title>	

		<link rel="stylesheet" href="assets/bootstrap.min.css">
	</head>
	<body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">PTT 02.12.2019 Database</div>
            </div>
            <form action="#" method="POST" name="adresform">
            <div class="row">
                
                    <div class="col-md-3">
                        <label class="col-form-label text-right">İl Seçin</label><br>
                        <select class="form-control" id="ilsec" name="il">
                            <option value="">İl Seçin</option>
                            <?php
                            $sql_iller = $mysqli->query("SELECT * FROM iller ORDER BY id ASC;");
                            while($iller = $sql_iller->fetch_array(MYSQLI_ASSOC))
                            {
                            ?>
                            <option value="<?=$iller["id"]?>" ><?=$iller["il_adi"]?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="col-form-label text-right">İlçe Seçin</label><br>
                        <select class="form-control" id="ilcesec" name="ilce">
                            <option>İlçe Seçin</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="col-form-label text-right">Semt Seçin</label><br>
                        <select class="form-control" id="semtsec" name="semt">
                            <option>Semt Seçin</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="col-form-label text-right">Mahalle Seçin</label><br>
                        <select class="form-control" name="mahalle" id="mahallesec">
                            <option>Mahalle Seçin</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label class="col-form-label text-right">&nbsp</label><br>
                        <input class="btn btn-danger btn-block" type="submit" value="GÖNDER">
                    </div>
                 
            </div>
            </form>

        </div>


		<script src="assets/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
        
            $('#ilsec').on('change', function() {
                var il_id = $( "#ilsec option:selected" ).val();
                $.ajax({
					type: "POST",
					url: "ilcesec.php",
					data: "il_id="+il_id,
					success : function(data){
                        $("#ilcesec").html(data);
                        console.log(data);
					}
				});
            });

            $('#ilcesec').on('change', function() {
                var ilce_id = $( "#ilcesec option:selected" ).val();
                $.ajax({
					type: "POST",
					url: "semtsec.php",
					data: "ilce_id="+ilce_id, 
					success : function(data){
                        $("#semtsec").html(data); 
                        console.log(data);
					}
				});
            });

            $('#semtsec').on('change', function() {
                var semt_id = $( "#semtsec option:selected" ).val();
                $.ajax({
					type: "POST",
					url: "mahallesec.php",
					data: "semt_id="+semt_id, 
					success : function(data){
                        $("#mahallesec").html(data); 
                        console.log(data);
					}
				});
            });
        
        });
        
        </script>

	</body>
</html>