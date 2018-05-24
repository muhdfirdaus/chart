<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beyonics | OTD Achievement - Update</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css"> -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>
<?php include('dist/includes/dbcon.php'); ?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
		Beyonics<small class="small-title"><a href="index.php">OTD Achievement - Update</a></small>
		</h1>
	</div>
</div>

<?php
$sql = "SELECT id, month, forecast, actual FROM q1";
$result = $conn->query($sql);
?>

<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">BTS OTD <?php echo date('Y');?></h3>
			</div>
			<form action="update_q1.php" method="post" name="form_q1" id="form_q1">
				<table class="table table-bordered table-striped">
					<thead>
						<th class="info text-center">Month</th>
						<th class="info text-center">Forecast Sales(%)</th>
						<th class="info text-center">Actual Achievement(%)</th>
					</thead>
					<tbody>
						<?php if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo '<tr><td class="text-center">'.$row["month"].'</td>
								<td class="text-center"><input class="form-control text-center" max="100" type="number" name="fc'.$row["id"].'" id=""fc'.$row["id"].'" value="'.(float)$row["forecast"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="number" name="ac'.$row["id"].'" id=""ac'.$row["id"].'" value="'.(float)$row["actual"].'"></td></tr>';
							}
						}
						// $conn->close();?>
						<tr>
							<td colspan="3" class="text-right">
								<input type="button" class="btn btn-primary" id="btn_q1" name="btn_q1" value="Update"></input>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>

<?php
$sql = "SELECT id, week, forecast, actual FROM q1_weekly";
$result = $conn->query($sql);
?>

<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">BTS OTD Weekly</h3>
			</div>
			<form action="update_q1_w.php" method="post" name="form_q1_w" id="form_q1_w">
				<table class="table table-bordered table-striped">
					<thead>
						<th class="info text-center">Week</th>
						<th class="info text-center">Forecast Sales(%)</th>
						<th class="info text-center">Actual Achievement(%)</th>
					</thead>
					<tbody>
						<?php if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo '<tr><td class="text-center">'.$row["week"].'</td>
								<td class="text-center"><input class="form-control text-center" max="100" type="number" name="fc'.$row["id"].'" id=""fc'.$row["id"].'" value="'.(float)$row["forecast"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="number" name="ac'.$row["id"].'" id=""ac'.$row["id"].'" value="'.(float)$row["actual"].'"></td></tr>';
							}
						}
						// $conn->close();?>
						<tr>
							<td colspan="3" class="text-right">
								<input type="button" class="btn btn-primary" id="btn_q1_w" name="btn_q1_w" value="Update"></input>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>


<?php
$sql = "SELECT id, problem, acc, qty FROM pareto";
$result = $conn->query($sql);
?>

<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Pareto Chart</h3>
			</div>
			<form action="update_pareto.php" method="post" name="form_pareto" id="form_pareto">
				<table class="table table-bordered table-striped">
					<thead>
						<th class="info text-center">Problem</th>
						<th class="info text-center">Acc(%)</th>
						<th class="info text-center">Qty</th>
					</thead>
					<tbody>
						<?php if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo '<tr><td class="text-center"><input class="form-control text-center" max="100" type="text" name="prob'.$row["id"].'" id=""prob'.$row["id"].'" value="'.$row["problem"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="number" name="fc'.$row["id"].'" id=""fc'.$row["id"].'" value="'.(float)$row["acc"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="number" name="ac'.$row["id"].'" id=""ac'.$row["id"].'" value="'.(float)$row["qty"].'"></td></tr>';
							}
						}
						// $conn->close();?>
						<tr>
							<td colspan="3" class="text-right">
								<input type="button" class="btn btn-primary" id="btn_pareto" name="btn_pareto" value="Update"></input>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>

<?php
$sql = "SELECT id, no, failure, act, pic, week, status FROM q3 order by no";
$result = $conn->query($sql);
?>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Q3 Table</h3>
			</div>
			<form action="update_q3.php" method="post" name="form_q3" id="form_q3">
				<table class="table table-bordered table-striped">
					<thead>
						<th class="info text-center col-lg-1">NO.</th>
						<th class="info text-center">Failure</th>
						<th class="info text-center">Update&Action</th>
						<th class="info text-center">Week</th>
						<th class="info text-center">PIC</th>
						<th class="info text-center">Status</th>
					</thead>
					<tbody>
						<?php if ($result->num_rows > 0) {
							// output data of each row
							$c = 0;	//counter initiator
							while($row = $result->fetch_assoc()) {
								$c++;
								echo '<tr><td class="text-center">'.$row["no"].'
								<input class="form-control text-center" type="hidden" name="rid'.$c.'" id=""rid'.$c.'" value="'.$row["id"].'"></td>
								<td class="text-center"><textarea class="form-control" style="resize:none" name="failure'.$c.'" id=""failure'.$c.'"  cols="40" rows="5">'.$row["failure"].'</textarea></td>
								<td class="text-center"><textarea class="form-control" style="resize:none" name="act'.$c.'" id=""act'.$c.'"  cols="40" rows="5">'.$row["act"].'</textarea></td>
								<td class="text-center">
									<select class="form-control" name="week'.$c.'" id=""week'.$c.'">
										<option value="-" '.(($row["week"]=="-")?'selected ="selected"':'').'>-</option>
										<option value="W1" '.(($row["week"]=="W1")?'selected ="selected"':'').'>W1</option>
										<option value="W2" '.(($row["week"]=="W2")?'selected ="selected"':'').'>W2</option>
										<option value="W3" '.(($row["week"]=="W3")?'selected ="selected"':'').'>W3</option>
										<option value="W4" '.(($row["week"]=="W4")?'selected ="selected"':'').'>W4</option>
										<option value="W5" '.(($row["week"]=="W5")?'selected ="selected"':'').'>W5</option>
									</select>
								</td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="pic'.$c.'" id=""pic'.$c.'" value="'.$row["pic"].'"></td>
								<td class="text-center">
									<select class="form-control" name="status'.$c.'" id=""status'.$c.'">
										<option value="-" '.(($row["status"]=="-")?'selected ="selected"':'').'>-</option>
										<option value="OPEN" '.(($row["status"]=="OPEN")?'selected ="selected"':'').'>OPEN</option>
										<option value="CLOSE" '.(($row["status"]=="CLOSE")?'selected ="selected"':'').'><p style="color:red">CLOSE</p></option>
									</select>
								</td></tr>';
							}
							echo '<input class="form-control text-center" type="hidden" name="counter_q3" id="counter_q3" value="'.$c.'">';
						}
						// $conn->close();?>
						<tr>
							<td colspan="6" class="text-right">
								<input type="button" class="btn btn-primary" id="btn_q3" name="btn_q3" value="Update"></input>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>

<?php
$sql = "SELECT *  FROM q4 order by no";
$result = $conn->query($sql);
?>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Q4 Table</h3>
			</div>
			<form action="update_q4.php" method="post" name="form_q4" id="form_q4">
				<table class="table table-bordered table-striped" id="tableq4">
					<thead>
						<th class="info text-center">NO.</th>
						<th class="info text-center">Model</th>
						<th class="info text-center">Remark</th>
						<th class="info text-center">Jan</th>
						<th class="info text-center">Feb</th>
						<th class="info text-center">Mar</th>
						<th class="info text-center">Apr</th>
						<th class="info text-center">May</th>
						<th class="info text-center">Jun</th>
						<th class="info text-center">Jul</th>
						<th class="info text-center">Aug</th>
						<th class="info text-center">Sep</th>
						<th class="info text-center">Oct</th>
						<th class="info text-center">Nov</th>
						<th class="info text-center">Dec</th>
					</thead>
					<tbody>
						<?php if ($result->num_rows > 0) {
							// output data of each row
							$c = 0;	//counter initiator 
							while($row = $result->fetch_assoc()) {
								$c++;
								echo '<tr>
								<td class="text-center">'.$row["no"].'
								<input class="form-control text-center" type="hidden" name="rid'.$c.'" id="rid'.$c.'" value="'.$row["id"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="model'.$c.'" id="model'.$c.'" value="'.$row["model"].'" required></td>
								<td class="text-center"><textarea class="form-control" style="resize:none" name="remark'.$c.'" id="remark'.$c.'"  cols="50" rows="2" required>'.$row["remark"].'</textarea></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="jan'.$c.'" id="jan'.$c.'" value="'.$row["jan"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="feb'.$c.'" id="feb'.$c.'" value="'.$row["feb"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="mar'.$c.'" id="mar'.$c.'" value="'.$row["mar"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="apr'.$c.'" id="apr'.$c.'" value="'.$row["apr"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="may'.$c.'" id="may'.$c.'" value="'.$row["may"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="jun'.$c.'" id="jun'.$c.'" value="'.$row["jun"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="jul'.$c.'" id="jul'.$c.'" value="'.$row["jul"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="aug'.$c.'" id="aug'.$c.'" value="'.$row["aug"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="sep'.$c.'" id="sep'.$c.'" value="'.$row["sep"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="oct'.$c.'" id="oct'.$c.'" value="'.$row["oct"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="nov'.$c.'" id="nov'.$c.'" value="'.$row["nov"].'"></td>
								<td class="text-center"><input class="form-control text-center" max="100" type="text" name="dece'.$c.'" id="dece'.$c.'" value="'.$row["dece"].'"></td>
								</tr>';
							}
							echo '<input class="form-control text-center" type="hidden" name="counter_q4" id="counter_q4" value="'.$c.'">';
						}
						$conn->close();?>
						<tr>
							<td colspan="15" class="text-right">
								<button type="button" id="tambahBtn" class="btn btn-default btn-font-blue" ><i class="fa fa-fw fa-plus"></i>Add Row</button>
								<input type="button" class="btn btn-primary" id="btn_q4" name="btn_q4" value="Update"></input>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>


    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
	$(function () {

		$("#form_q1").keypress(function(e) {
			//Enter key
			if (e.which == 13) {
			return false;
			}
		});

		$("#btn_q1").click(function () {
			document.getElementById("form_q1").submit();
        });

		$("#form_q1_w").keypress(function(e) {
			//Enter key
			if (e.which == 13) {
			return false;
			}
		});

		$("#btn_q1_w").click(function () {
            document.getElementById("form_q1_w").submit();
        });

		$("#form_pareto").keypress(function(e) {
			//Enter key
			if (e.which == 13) {
			return false;
			}
		});

		$("#btn_pareto").click(function () {
			document.getElementById("form_pareto").submit();
		});


		$("#btn_q3").click(function () {
			document.getElementById("form_q3").submit();
		});


		$("#btn_q4").click(function () {
			var msg = 'Please insert value for:';
			var tot = $("#counter_q4").val();
			var msgAppear = false;
			for(var i=1; i<= tot; i++) {
				var rem = "remark" + i;
				var model = "model" + i;
				var valrem = document.getElementById(rem).value;
				var valmod = document.getElementById(model).value;
				
				if(valrem.trim() == "" ) {
					msg = msg + "\n - Remark (Line:" + i +")";
					msgAppear = true;
				}
				else if(valmod.trim() == "" ){
					msg = msg + "\n - Model (Line:" + i +")";
					msgAppear = true;
				}
				
			}
			if(msgAppear){
				alert(msg);
			}
			else{
				document.getElementById("form_q4").submit();
			}
		});
		
		function isNumber(n) {
			return !isNaN(parseFloat(n)) && isFinite(n);
		}
		$("#tambahBtn").on("click", getValue);


		function getValue() {

			$("#kadp_baru").hide();
			$("#lain").hide();
			$(".original").show();
			$('.original').val('');

			var values = {};
					var tableData = "";

					$.each($("#carian-form-id").serializeArray(), function (i, field) {
						values[field.name] = field.value;
					});

					var getValue = function (valueName) {
						return values[valueName];
					};

					var select_jenis = $('input[name=jenis_hakmilik]:checked').val();

					if(select_jenis == "dhm"){
						carian = "Hakmilik";
					}else if(select_jenis == "dhm_strata"){
						carian = "Hakmilik Strata";
					}else if(select_jenis == "lot"){
						carian = "Lot"
					}else if(select_jenis == "lot_strata"){
						carian = "Lot Strata"
					}else if(getValue("jenis_kp") > 0 || getValue("kp1") != '' || getValue("kp2") != '' || getValue("kp3") != '' || getValue("no_pengenalan") != '' || getValue("pengenalan_daerah") > 0){
						carian = "Maklumat Pengenalan";
					}else{
						carian = "Invalid";
						alert("Amaran! Anda tidak mengisi borang carian lagi");
					}

					if(getValue("jenis_terimaan") != null){
						terimaan = getValue("jenis_terimaan");
						tableData += '<b>Jenis Terimaan: </b>'+terimaan+'<input type="hidden" name="terimaan['+rowNum+']" value="'+terimaan+'" />'+'<input type="hidden" name="rowForLoop['+rowNum+']" value="'+rowNum+'" />';
					}

					if(getValue("dhm_daerah") > 0){
						daerah = getValue("dhm_daerah");
						tableData += '<b> Daerah: </b>'+daerah+'<input type="hidden" name="daerah['+rowNum+']" value="'+daerah+'" />';
					}else if(getValue("lot_daerah") > 0){
						daerah = getValue("lot_daerah");
						tableData += '<b> Daerah: </b>'+daerah+'<input type="hidden" name="daerah['+rowNum+']" value="'+daerah+'" />';
					}else if(getValue("pengenalan_daerah") > 0){
						daerah = getValue("pengenalan_daerah");
					}else{
						daerah = " - ";
						tableData += '<b> Daerah: </b>'+daerah;
					}

					if(getValue("dhm_mukim") > 0){
						mukim = getValue("dhm_mukim");
						tableData += '<b> Mukim: </b>'+mukim+'<input type="hidden" name="mukim['+rowNum+']" value="'+mukim+'" />';
					}else if(getValue("lot_mukim") > 0){
						mukim = getValue("lot_mukim");
						tableData += '<b> Mukim: </b>'+mukim+'<input type="hidden" name="mukim['+rowNum+']" value="'+mukim+'" />';
					}else{
						mukim = " - ";
						tableData += '<b> Mukim: </b>'+mukim;
					}

					if(getValue("dhm_jenis") > 0){
						jenisDhm = getValue("dhm_jenis");
						tableData += '<b> Jenis: </b>'+jenisDhm+'<input type="hidden" name="jenisDhm['+rowNum+']" value="'+jenisDhm+'" />';
					}else if(getValue("lot_jenis") > 0){
						jenisLot = getValue("lot_jenis");
						tableData += '<b> Jenis: </b>'+jenisLot+'<input type="hidden" name="jenisLot['+rowNum+']" value="'+jenisLot+'" />';
					}else{
						jenis = " - ";
						tableData += '<b> Jenis: </b>'+jenis;
					}

					if(getValue("dhm_dari") > 0){
						dariDhm = getValue("dhm_dari");
						tableData += '<b> No. (Dari): </b>'+dariDhm+'<input type="hidden" name="dariDhm['+rowNum+']" value="'+dariDhm+'" />';
					}else if(getValue("lot_dari") > 0){
						dariLot = getValue("lot_dari");
						tableData += '<b> No. (Dari): </b>'+dariLot+'<input type="hidden" name="dariLot['+rowNum+']" value="'+dariLot+'" />';
					}else{
						dari = " - ";
						tableData += '<b> No. (Dari): </b>'+dari;
					}

					if(getValue("dhm_hingga") > 0){
						hinggaDhm = getValue("dhm_hingga");
						tableData += '<b> No. (Hingga): </b>'+hinggaDhm+'<input type="hidden" name="hinggaDhm['+rowNum+']" value="'+hinggaDhm+'" />';
					}else if(getValue("lot_hingga") > 0){
						hinggaLot = getValue("lot_hingga");
						tableData += '<b> No. (Hingga): </b>'+hinggaLot+'<input type="hidden" name="hinggaLot['+rowNum+']" value="'+hinggaLot+'" />';
					}else{
						hingga = " - ";
						tableData += '<b> No. (Hingga): </b>'+hingga;
					}

					//strata
					if($("#dhm_bangunan_nama").val() != ""){
						noBangunan = $("#dhm_bangunan_nama").val();
						tableData += '<b> No Bangunan: </b>'+noBangunan+'<input type="hidden" name="noBangunan['+rowNum+']" value="'+noBangunan+'" />';
					}else if($("#lot_bangunan_nama").val() != ""){
						noBangunan = $("#lot_bangunan_nama").val();
						tableData += '<b> No Bangunan: </b>'+noBangunan+'<input type="hidden" name="noBangunan['+rowNum+']" value="'+noBangunan+'" />';
					} else{
						noBangunan = "-";
						tableData += '<b> No Bangunan: </b>'+noBangunan;
					}

					if($("#dhm_tingkat").val() != ""){
						noTingkat = $("#dhm_tingkat").val();
						tableData += '<b> No Tingkat: </b>'+noTingkat+'<input type="hidden" name="noTingkat['+rowNum+']" value="'+noTingkat+'" />';
					}else if($("#lot_tingkat").val() != ""){
						noTingkat = $("#lot_tingkat").val();
						tableData += '<b> No Tingkat: </b>'+noTingkat+'<input type="hidden" name="noTingkat['+rowNum+']" value="'+noTingkat+'" />';
					} else{
						noTingkat = "-";
						tableData += '<b> No Tingkat: </b>'+noTingkat;
					}

					if($("#petak_dhm_dari").val() != ""){
						noPetakDari = $("#petak_dhm_dari").val();
						tableData += '<b> No Petak Dari: </b>'+noPetakDari+'<input type="hidden" name="noPetakDari['+rowNum+']" value="'+noPetakDari+'" />';
					}else if($("#petak_lot_dari").val() != ""){
						noPetakDari = $("#petak_lot_dari").val();
						tableData += '<b> No Petak Dari: </b>'+noPetakDari+'<input type="hidden" name="noPetakDari['+rowNum+']" value="'+noPetakDari+'" />';
					} else{
						noPetakDari = "-";
						tableData += '<b> No Petak Dari: </b>'+noPetakDari;
					}

					if($("#petak_dhm_hingga").val() != ""){
						noPetakHingga = $("#petak_dhm_hingga").val();
						tableData += '<b> No Petak Hingga: </b>'+noPetakHingga+'<input type="hidden" name="noPetakHingga['+rowNum+']" value="'+noPetakHingga+'" />';
					}else if($("#petak_lot_hingga").val() != ""){
						noPetakHingga = $("#petak_lot_hingga").val() != "";
						tableData += '<b> No Petak Hingga: </b>'+noPetakHingga+'<input type="hidden" name="noPetakHingga['+rowNum+']" value="'+noPetakHingga+'" />';
					} else{
						noPetakHingga = "-";
						tableData += '<b> No Petak Hingga: </b>'+noPetakHingga;
					}
					// end strata

						noic = "";
						if(getValue("jenis_kp") > 0 || getValue("kp1") != '' || getValue("kp2") != '' || getValue("kp3") != '' || getValue("no_pengenalan") != '' || getValue("pengenalan_daerah") > 0){
						if(getValue("kp1") != '' || getValue("kp2") != '' || getValue("kp3") != ''){
						noic = getValue("kp1") + getValue("kp2") + getValue("kp3");
						}
						if (getValue("no_pengenalan") != ''){
						noic = getValue("no_pengenalan");
						}

						jenisPengenalan = getValue("jenis_kp");
						jenisPengenalanView = $("#jenis_kp option:selected").text();

						if(getValue("pengenalan_daerah") > 0){
							pengenalan_daerah = getValue("pengenalan_daerah");
							tableData = '<b> Daerah: </b>'+pengenalan_daerah+'<input type="hidden" name="daerahPengenalan['+rowNum+']" value="'+pengenalan_daerah+'" />';
						} else {
							pengenalan_daerah = " - ";
							tableData = '<b> Daerah: </b>'+hingga;
						}

						$('#tableq4 tbody').append('<tr id='+rowNum+'><td><input type="hidden" name="rowForLoopPengenalan['+rowNum+']" value="'+rowNum+'" />'+rowNum+'</td><td>'+carian+'</td><td><b>Jenis Terimaan: </b>'+terimaan+'<input type="hidden" name="terimaan['+rowNum+']" value="'+terimaan+'" /><b> Jenis Maklumat Pengenalan: </b>'+jenisPengenalanView+'<input type="hidden" name="jenisPengenalan['+rowNum+']" value="'+jenisPengenalan+'" /><b> No. Pengenalan: </b>'+noic+'<input type="hidden" name="noic['+rowNum+']" value="'+noic+'" />'+tableData+'</td><td><button type="button" id="deleteBtn" class="btn btn-danger removebutton" >Padam</button></td></tr>');
					}else if(getValue("dhm_daerah") > 0 || getValue("dhm_mukim") > 0 || getValue("dhm_jenis") > 0 || getValue("dhm_dari") > 0 || getValue("dhm_hingga") > 0 || getValue("lot_daerah") > 0 || getValue("lot_mukim") > 0 || getValue("lot_lain") > 0 || getValue("lot_dari") > 0 || getValue("lot_hingga") > 0){
						$('#tableq4 tbody').append('<tr id='+rowNum+'><td><input type="hidden" name="rowForLoopHakmilik['+rowNum+']" value="'+rowNum+'" />'+rowNum+'</td><td>'+carian+'</td><td>'+tableData+'</td><td><button type="button" id="deleteBtn" class="btn btn-danger removebutton" >Padam</button></td></tr>');
					}

					$('#carian-form-id').trigger("reset");
					checkMultiForm();
					rowNum++;
					$( "#dhm_daerah" ).focus();
		}

		function clearSelectize(){

			var temp_selectizeArr = ['dhm_daerah','dhm_jenis','lot_daerah','lot_jenis','pengenalan_daerah'];
			var imp, select, control;
			for (imp = 0; imp < temp_selectizeArr.length; imp++) {
				select = $('#'+temp_selectizeArr[imp]).selectize();
				control = select[0].selectize;
				control.clear(true);
			}
		}
	});
</script>