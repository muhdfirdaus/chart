<html>
<?php
include('dist/includes/dbcon.php');?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beyonics | OTD Achievement</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- Bootstrap 3.3.5 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel='stylesheet prefetch' href='http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css'>
</head>

<!-- <nav class="navbar navbar-inverse"> -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->

<!-- <nav class="navbar navbar-expand-lg navbar-inverse bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="dist/img/bey_logo.png" alt="Beyonics" height="30" width="92"></a>
    </div>
    <p class="navbar-brand">&nbsp;OTD ACHIEVEMENT | MATERIAL</p>
    
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
      <li><a href="html/update_form.php">Update</a></li>
    </ul>
  </div>
</nav> -->


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Beyonics</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OTD ACHIEVEMENT | MATERIAL<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">OTD ACHIEVEMENT | MATERIAL 1</a></li>
            <li><a href="#">OTD ACHIEVEMENT | MATERIAL 2</a></li>
            <li><a href="#">OTD ACHIEVEMENT | MATERIAL 3</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="html/update_form.php">Update</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<body >
    <div class="chart-container" >
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Q1</h3>
                    </div>
                    <table align=center class="table-bordered">
                        <tr>
                            <td width=30% height=500 align=center><canvas id="otd" style="width: 30%; height: 15%px" ></canvas></td>
                            <td width=30% height=500 align=center><canvas id="weekly" style="width: 30%; height: 15%px" ></canvas></td>
                            <td width=30% height=500 align=center><canvas id="pareto" style="width: 60%; height: 50%px" ></canvas></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Q2</h3>
                    </div>
                    <table width=50% align=center class="table-bordered">
                        <tr>
                            <td align=center><canvas id="project"></canvas></td>
                        </tr>
                    </table>
                
                </div>
            </div>
        </div>
        <br><br>

    <!-- </div>
    <div class="container" > --> 
    <?php
    isset($_GET['status'])?$status = $_GET['status'] : $status= '-';
	
	isset($_GET['week'])?$week = $_GET['week'] : $week= '-';
	
    if($status == '-' && $week == '-'){
        $sql = "SELECT id, failure, act, pic, week, status FROM q3 order by id";
    }
	else if($status != '-' && $week == '-'){
		$sql = "SELECT id, failure, act, pic, week, status FROM q3 where status='$status' order by id";
	}
	else if($week != '-' && $status =='-'){
		$sql = "SELECT id, failure, act, pic, week, status FROM q3 where week='$week' order by id";
	}	
    else{
        $sql = "SELECT id, failure, act, pic, week, status FROM q3 where status='$status' and week='$week' order by id";
    }
	
    $result = $conn->query($sql);
    ?>
		<div style="display:flex;">
		
			<div style="float:left;width:7%;margin-left:455px;">
				<form name="dropdown_week" method="post" action="">
					<select class="form-control" name="week" id="week">
						<option value="-" <?php if($week=='-'){echo 'selected';} ?>>ALL</option>
						<option value="W1" <?php if($week=='W1'){echo 'selected';} ?>>W1</option>
						<option value="W2" <?php if($week=='W2'){echo 'selected';} ?>>W2</option>
						<option value="W3" <?php if($week=='W3'){echo 'selected';} ?>>W3</option>
						<option value="W4" <?php if($week=='W4'){echo 'selected';} ?>>W4</option>
						<option value="W5" <?php if($week=='W5'){echo 'selected';} ?>>W5</option>
					</select> 
				</form>
			</div>		
		
				<div style="float:left;width:7%;margin-left:20px;">
					<form name="dropdown_status" method="post" action="">           
						<select class="form-control" name="status" id="status">
							<option value="-" <?php if($status=='-'){echo 'selected';} ?>>ALL</option>
							<option value="OPEN" <?php if($status=='OPEN'){echo 'selected';} ?>>OPEN</option>
							<option value="CLOSE" <?php if($status=='CLOSE'){echo 'selected';} ?>>CLOSE</option>
						</select>
				</div>
		</div>
		
        <div style="float:left;width:50%;margin-left:5px;"  class="row" id='q3'>
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Q3</h3>
                    </div>
                        <table  class="table table-striped table-bordered table-condensed">
                            <!-- <thead style="font-size:90%;"> -->

                            <tr>
                                <th class="info text-center">No</th>
                                <th class="info text-center">Failure</th>
                                <th class="info text-center">Update&Action</th>
                                <th class="info text-center">Week</th>
                                <th class="info text-center">PIC</th>
                                <th class="info text-center">Status</th>
                            </tr>
                            <!-- </thead> -->
                            <tbody style="font-size:90%;">
                                <?php if ($result->num_rows > 0) {
                                    $c = 0;
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        $c++;
                                        echo '<tr><td class="text-center">'.$c.'</td>
                                        <td class="text-left">'.$row["failure"].'</td>
                                        <td class="text-left">'.$row["act"].'</td>
                                        <td class="text-center">'.$row["week"].'</td>
                                        <td class="text-center">'.$row["pic"].'</td>
                                        <td class="text-center">'.$row["status"].'</td></tr>';
                                    }
                                }else{
                                    echo'<tr><td colspan=6>No data to be shown.</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                </div><!-- /.panel -->
            </div><!-- /.col (right) -->
        </div><!-- /.row -->

        <?php
        $sql = "SELECT *  FROM q4 order by id";
        $result = $conn->query($sql);
        ?>                               
        <div style="float:right;width:50%;margin-right:5px;" class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Q4</h3>
                    </div>
                        <table class="table table-striped table-bordered table-condensed">
                            <tr>
                                <th class="info text-center">No</th>
                                <th class="info text-center">Model</th>
                                <th class="info text-center">Remark</th>
                                <th class="info text-center">Jan</th>
                                <th class="info text-center">Feb</th>
                                <th class="info text-center">Mac</th>
                                <th class="info text-center">Apr</th>
                                <th class="info text-center">May</th>
                                <th class="info text-center">Jun</th>
                                <th class="info text-center">Jul</th>
                                <th class="info text-center">Aug</th>
                                <th class="info text-center">Sep</th>
                                <th class="info text-center">Oct</th>
                                <th class="info text-center">Nov</th>
                                <th class="info text-center">Dec</th>
                            <tr>
                            <tbody style="font-size:90%;">
                                <?php if ($result->num_rows > 0) {
                                    $c = 0;
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        $c++;
                                        echo '<tr>
                                        <td class="text-center">'.$c.'</td>
                                        <td class="text-center">'.$row["model"].'</td>
                                        <td class="text-center">'.$row["remark"].'</td>
                                        <td class="text-center">'.$row["jan"].'</td>
                                        <td class="text-center">'.$row["feb"].'</td>
                                        <td class="text-center">'.$row["mar"].'</td>
                                        <td class="text-center">'.$row["apr"].'</td>
                                        <td class="text-center">'.$row["may"].'</td>
                                        <td class="text-center">'.$row["jun"].'</td>
                                        <td class="text-center">'.$row["jul"].'</td>
                                        <td class="text-center">'.$row["aug"].'</td>
                                        <td class="text-center">'.$row["sep"].'</td>
                                        <td class="text-center">'.$row["oct"].'</td>
                                        <td class="text-center">'.$row["nov"].'</td>
                                        <td class="text-center">'.$row["dece"].'</td>
                                        </tr>';
                                    }
                                }else{
                                    echo'<tr><td colspan=15>No data to be shown.</td></tr>';
                                }//$conn->close();?>
                            </tbody>
                        </table>
                </div><!-- /.panel -->
            </div><!-- /.col (right) -->
        </div><!-- /.row -->
    </div>
</body>

<?php
$sql = "SELECT *  FROM q1 order by id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $c=0;
    $month='"';
    $forecast="";
    $actual="";
    while($row = $result->fetch_assoc()) {
        $c++;
        if($c>1){
            $month.=', "';
            $forecast.=", ";
            $actual.=", ";
        }
        $month.= $row["month"].'"';
        $forecast.=(float)$row["forecast"];
        $actual.=(float)$row["actual"];
    }
}

$sql = "SELECT *  FROM q1_weekly order by id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $c=0;
    $week='"';
    $forecastw="";
    $actualw="";
    while($row = $result->fetch_assoc()) {
        $c++;
        if($c>1){
            $week.=', "';
            $forecastw.=", ";
            $actualw.=", ";
        }
        $week.= $row["week"].'"';
        $forecastw.=(float)$row["forecast"];
        $actualw.=(float)$row["actual"];
    }
}

$sql = "SELECT *  FROM pareto order by id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $c=0;
    $problem='"';
    $acc="";
    $qty="";
    while($row = $result->fetch_assoc()) {
        $c++;
        if($c>1){
            $problem.=', "';
            $acc.=", ";
            $qty.=", ";
        }
        $problem.= $row["problem"].'"';
        $acc.=(float)$row["acc"];
        $qty.=$row["qty"];
    }
}$conn->close();?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        <script>
            var otd = document.getElementById('otd').getContext('2d');
            var pareto = document.getElementById('pareto').getContext('2d');
            var project = document.getElementById('project').getContext('2d');
            var weekly = document.getElementById('weekly').getContext('2d');

            var chart_otd = new Chart(otd, {
                // The type of chart we want to create
                type: 'bar',
                // The data for our dataset
                data: {
                    labels: [<?php echo $month;?>],
                    datasets: [{
                        label: 'Forecast Sales(%)',
                        data: [<?php echo $forecast;?>],
                        borderColor: 'rgb(204, 0, 69)',
                        fill:   false,
                        lineTension: 0,
                        
                        // Changes this dataset to become a line
                        type: 'line'
                    }, {
                        label: "Actual Achievement (%)",
                        backgroundColor: 'rgb(0, 130, 123)',
                        borderColor: 'rgb(0, 3, 27)',
                        data: [<?php echo $actual;?>],
                    }]
                },

                // Configuration options go here
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'BTS OTD <?php echo date('Y'); ?>',
                        fontSize:  18
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            var chart_weekly = new Chart(weekly, {
                // The type of chart we want to create
                type: 'bar',
                // The data for our dataset
                data: {
                    labels: [<?php echo $week;?>],
                    datasets: [{
                        label: 'Forecast Sales(%)',
                        data: [<?php echo $forecastw;?>],
                        borderColor: 'rgb(204, 0, 69)',
                        fill:   false,
                        lineTension: 0,
                        
                        // Changes this dataset to become a line
                        type: 'line'
                    }, {
                        label: "Actual Achievement (%)",
                        backgroundColor: 'rgb(0, 130, 123)',
                        borderColor: 'rgb(0, 3, 27)',
                        data: [<?php echo $actualw;?>],
                    }]
                },

                // Configuration options go here
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'BTS OTD WEEKLY',
                        fontSize:  18
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            var chart_pareto = new Chart(pareto, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    // labels: ["Material Quality", "Tester breakdown", "Material shortages", "Production Inefficiency", "Others"],
                    labels: [<?php echo $problem;?>],
                    datasets: [{
                        label: 'Acc(%)',
                        yAxisID: 'A',
                        data: [<?php echo $acc;?>],
                        borderColor: 'rgb(204, 0, 69)',
                        fill:   false,
                        lineTension: 0,
                        
                        // Changes this dataset to become a line
                        type: 'line'
                    }, {
                        label: "Qty",
                        yAxisID: 'B',
                        backgroundColor: 'rgb(0, 130, 123)',
                        borderColor: 'rgb(0, 3, 27)',
                        data: [<?php echo $qty;?>],
                    }]

                },

                // Configuration options go here
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Pareto Chart',
                        fontSize:  18
                    },
                    scales: {
                        yAxes: [{
                            id: 'A',
                            type: 'linear',
                            position: 'right',
                            ticks: {
                            min: 0
                            },
                            gridLines : {
                                display : false
                            }
                        }, {
                            id: 'B',
                            type: 'linear',
                            position: 'left',
                            ticks: {
                            min: 0
                            },
                            gridLines : {
                                display : false
                            }
                        }]
                    }
                }
            });

            var chart_project = new Chart(project, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: ["Customer", "AddValue", "Carling", "Aurora", "Avago", "ESI", "Eutech", "Hauppauge", "Indigo","Inteco-Biologic", "Inteco-Spineguard", "MerchantLink", "OceanServer","Precida","Xilinx"],
                    datasets: [{
                        label: 'OTD(%)',
                        data: [100, 100, 100, 100, 100, 100, 100, 100, , , , 100, , ],
                        borderColor: 'rgb(204, 0, 69)',
                        fill:   false,
                        lineTension: 0,
                        
                        // Changes this dataset to become a line
                        type: 'line'
                    }]
                },

                // Configuration options go here
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'OTD by Projects',
                        fontSize:  18
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
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



        <script>
		
		$(function () {
            $('#week').on('change',function(){
                week = $("#week").val();
                status = $("#status").val();
                if(week != "-" )
                {
                endext = "?week=" + week + "&status=" + status +"#q3";
                }
                else
                {
                endext = "?week=-&status=" + status +"#q3";
                }
                window.location.href = (endext);
            });
        });
		
        $(function () {
            $('#status').on('change',function(){
                week = $("#week").val();
                status = $("#status").val();
                if(status != "-" )
                {
                endext = "?week=" + week + "&status=" + status +"#q3";
                }
                else
                {
                endext = "?week=" + week + "&status=-#q3";
                }
                window.location.href = (endext);
            });
        });

        $(document).ready(function() {
            $(".dropdown-toggle").dropdown();
        });
        </script>
    </div>

