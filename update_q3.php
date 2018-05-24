<?php
include('dist/includes/dbcon.php');

$total = $_POST["counter_q3"];
$counter =0;
for($i=1; $i<=$total; $i++){

    isset($_POST["failure$i"])?$fail = $_POST["failure$i"]: $fail="NULL";
    isset($_POST["act$i"])?$act = $_POST["act$i"]: $act = "NULL";
    isset($_POST["pic$i"])?$pic = $_POST["pic$i"]: $pic = "NULL";

    $sql = "UPDATE q3 SET failure='".$fail."', act='".$act."', 
    week='".$_POST["week$i"]."', pic='".$pic."', 
    status='".$_POST["status$i"]."' WHERE id=".$_POST["rid$i"]."";
    
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
	window.history.back();
	</script>';
}



?>