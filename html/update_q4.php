<?php
include('../dist/includes/dbcon.php');

$total = $_POST["counter_q4"];
$counter = 0;
$to_del = rtrim($_POST["to_del"],",");
$sql = "DELETE from q4 where id in ($to_del)";
if ($conn->query($sql) === TRUE) {
    //
} else {
    echo  "Error deleting record: " . $conn->error ."<br>";
}
for($i=1; $i<=$total; $i++){

    isset($_POST["jan$i"])?$jan = $_POST["jan$i"]: $jan="NULL";
    isset($_POST["feb$i"])?$feb = $_POST["feb$i"]: $feb = "NULL";
    isset($_POST["mar$i"])?$mar = $_POST["mar$i"]: $mar = "NULL";
    isset($_POST["apr$i"])?$apr = $_POST["apr$i"]: $apr = "NULL";
    isset($_POST["may$i"])?$may = $_POST["may$i"]: $may = "NULL";
    isset($_POST["jun$i"])?$jun = $_POST["jun$i"]: $jun = "NULL";
    isset($_POST["jul$i"])?$jul = $_POST["jul$i"]: $jul = "NULL";
    isset($_POST["aug$i"])?$aug = $_POST["aug$i"]: $aug = "NULL";
    isset($_POST["sep$i"])?$sep = $_POST["sep$i"]: $sep = "NULL";
    isset($_POST["oct$i"])?$oct = $_POST["oct$i"]: $oct = "NULL";
    isset($_POST["nov$i"])?$nov = $_POST["nov$i"]: $nov = "NULL";
    isset($_POST["dece$i"])?$dec = $_POST["dece$i"]: $dec = "NULL";

    if($_POST["rid$i"]=="new"){
        $sql = "INSERT INTO q4 (model, remark, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece)
                values ('".$_POST["model$i"]."','".$_POST["remark$i"]."', '".$jan."', '".$feb."','".$mar."', '".$apr."', '".$may."', '".$jun."', '".$jul."', '".$aug."','".$sep."', '".$oct."', '".$nov."', '".$dec."')";
    }
    else{
        $sql = "UPDATE q4 SET jan='".$jan."', feb='".$feb."',
                mar='".$mar."', apr='".$apr."',
                may='".$may."', jun='".$jun."',
                jul='".$jul."', aug='".$aug."',
                sep='".$sep."', oct='".$oct."',
                nov='".$nov."', dece='".$dec."', 
                remark='".$_POST["remark$i"]."', model='".$_POST["model$i"]."' WHERE id=".$_POST["rid$i"]."";
    }
    
    // echo($sql."and the counter=".$counter." and the total=".$total."<br>");
    // $counter++;
    if ($conn->query($sql) === TRUE) {
        $counter += 1;
    } else {
        echo  "Error updating record: " . $conn->error ."<br>";
    }  
}
$conn->close();
if($counter==$total){
    echo'<script type="text/javascript">
	alert("Record updated successfully");
	window.location = document.referrer;;
	</script>';
}



?>