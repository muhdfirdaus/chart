<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beyonics | OTD Achievement - Update</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css"> -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
</head>
<?php include('../dist/includes/dbcon.php'); ?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
		Beyonics<small class="small-title"><a href="../index.php">OTD Achievement - Update</a></small>
		</h1>
	</div>
</div>
<body onload="document.refresh();">
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
						?>
					</tbody>
				</table>
			</form>			
			<div class="panel-footer">
				<button type="button" class="btn btn-primary "id="btn_q1" style="float: right;">Update</button>
				<div class="clearfix"></div>
			</div>
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
					</tbody>
				</table>
			</form>			
			<div class="panel-footer">
				<button type="button" class="btn btn-primary "id="btn_q1_w" style="float: right;">Update</button>
				<div class="clearfix"></div>
			</div>
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
					</tbody>
				</table>
			</form>			
			<div class="panel-footer">
				<button type="button" class="btn btn-primary "id="btn_pareto" style="float: right;">Update</button>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

<?php
$sql = "SELECT id, no, failure, act, pic, week, status FROM q3 order by id";
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
						?>
					</tbody>
				</table>
			</form>			
			<div class="panel-footer">
				<button type="button" class="btn btn-primary "id="btn_q3" style="float: right;">Update</button>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

<?php
$sql = "SELECT *  FROM q4 order by id";
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
						<th class="info text-center">No</th>
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
								$ci = $row["id"];
								// '.$row["no"].'
								echo '<tr>
								<td class="text-center">'.$c.'<button type="button" class="btn btn-danger btn-xs" onclick="deleteRow(this, '.$ci.', '.$c.')"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</button>
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
							echo '<input class="form-control text-center" type="hidden" name="counter_q4" id="counter_q4" value="'.$c.'">
							<input class="form-control text-center" type="hidden" name="to_del" id="to_del" value="">';
						}
						$conn->close();?>
					</tbody>
				</table>
			</form>
			<div class="panel-footer">
				<button type="button" class="btn btn-primary "id="btn_q4" style="float: right;">Update</button>
				<button type="button" id="tambahBtn" class="btn btn-default btn-font-blue" style="float: right;">Add Row</button>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
</body>
<script>
	function deleteRow(btn, ci, c) {
		// console.log("hahaha");
		// alert(ci + "->>" + c);
		// var row = btn.parentNode.parentNode;
		// row.parentNode.removeChild(row);

		if(ci != 1.1){
			asal = $("#to_del").val();
			baru = asal + ci +",";
			$("#to_del").val(baru);
		}
		ct_asal = $("#counter_q4").val();
		for(i = c; i < ct_asal; i++){
			n = i+1;
			$("#rid"+i).val($("#rid"+n).val());
			$("#remark"+i).val($("#remark"+n).val());
			$("#model"+i).val($("#model"+n).val());
			$("#jan"+i).val($("#jan"+n).val());
			$("#feb"+i).val($("#feb"+n).val());
			$("#mar"+i).val($("#mar"+n).val());
			$("#apr"+i).val($("#apr"+n).val());
			$("#may"+i).val($("#may"+n).val());
			$("#jun"+i).val($("#jun"+n).val());
			$("#jul"+i).val($("#jul"+n).val());
			$("#aug"+i).val($("#aug"+n).val());
			$("#sep"+i).val($("#sep"+n).val());
			$("#oct"+i).val($("#oct"+n).val());
			$("#nov"+i).val($("#nov"+n).val());
			$("#dece"+i).val($("#dece"+n).val());
		}
		$("#counter_q4").val(ct_asal-1);
		document.getElementById("tableq4").deleteRow(-1);
	}

	$(function () {

		$("#form_q1").keypress(function(e) {
			//Enter key
			if (e.which == 13) {
			return false;con.quer()
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
				if(valmod.trim() == "" ){
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
		
		$("#tambahBtn").on("click", addRow);


		function addRow() {

			ct = Number($("#counter_q4").val());
			ct2 = ct+1;
			c = 1.1;
			$('#tableq4 tbody').append('<tr><td class="text-center">'+ct2+'<button type="button" class="btn btn-danger btn-xs" onclick="deleteRow(this, '+c+', '+ct2+')"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</button><input class="form-control text-center" type="hidden" name="rid'+ct2+'" id="rid'+ct2+'" value="new"></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="model'+ct2+'" id="model'+ct2+'" value="" required></td><td class="text-center"><textarea class="form-control" style="resize:none" name="remark'+ct2+'" id="remark'+ct2+'"  cols="50" rows="2" required></textarea></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="jan'+ct2+'" id="jan'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="feb'+ct2+'" id="feb'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="mar'+ct2+'" id="mar'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="apr'+ct2+'" id="apr'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="may'+ct2+'" id="may'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="jun'+ct2+'" id="jun'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="jul'+ct2+'" id="jul'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="aug'+ct2+'" id="aug'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="sep'+ct2+'" id="sep'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="oct'+ct2+'" id="oct'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="nov'+ct2+'" id="nov'+ct2+'" value=""></td><td class="text-center"><input class="form-control text-center" max="100" type="text" name="dec'+ct2+'" id="dec'+ct2+'" value=""></td></tr>');
			$("#counter_q4").val(ct+1);
			// $('#tableq4 tbody').append('<tr id='+rowNum+'>');
					
			// rowNum++;
			// $( "#dhm_daerah" ).focus();
		}
	});
</script>