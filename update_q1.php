<?php
include('dist/includes/dbcon.php');
$counter = 0;
for($i=1; $i<=12; $i++){
    $sql = "UPDATE q1 SET forecast=".$_POST["fc$i"].", actual=".$_POST["ac$i"]." WHERE id=$i";
    if ($conn->query($sql) === TRUE) {
        $counter += 1;
    } else {
        echo  "Error updating record: " . $conn->error ;
    }  
}
$conn->close();
if($counter==12){
    echo'<script type="text/javascript">
	alert("Record updated successfully");
	window.history.back();
	</script>';
}



?>