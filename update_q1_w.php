<?php
include('dist/includes/dbcon.php');
$counter = 0;
for($i=1; $i<=5; $i++){
    $sql = "UPDATE q1_weekly SET forecast=".$_POST["fc$i"].", actual=".$_POST["ac$i"]." WHERE id=$i";
    if ($conn->query($sql) === TRUE) {
        $counter += 1;
    } else {
        echo  "Error updating record: " . $conn->error ;
    }  
}
$conn->close();
if($counter==5){
    echo'<script type="text/javascript">
	alert("Record updated successfully");
	window.history.back();
	</script>';
}



?>