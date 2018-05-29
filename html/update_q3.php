<?php
include('../dist/includes/dbcon.php');

$total = $_POST["counter_q3"];
$counter =0;
$to_del = rtrim($_POST["to_delq3"],",");
$sql = "DELETE from q3 where id in ($to_del)";
echo($sql);
// if ($conn->query($sql) === TRUE) {
//     //
// } else {
//     echo  "Error deleting record: " . $conn->error ."<br>";
// }
// for($i=1; $i<=$total; $i++){

//     isset($_POST["failure$i"])?$fail = $_POST["failure$i"]: $fail="";
//     isset($_POST["act$i"])?$act = $_POST["act$i"]: $act = "";
//     isset($_POST["pic$i"])?$pic = $_POST["pic$i"]: $pic = "";

//     if($_POST["rid$i"] == "new"){
//         $sql = "INSERT INTO q3 (failure, act, pic, week, status) 
//         values ('".$fail."', '".$act."', '".$pic."', '".$_POST["week$i"]."', '".$_POST["status$i"]."')";
//     }
//     else{
//         $sql = "UPDATE q3 SET failure='".$fail."', act='".$act."', 
//         week='".$_POST["week$i"]."', pic='".$pic."', 
//         status='".$_POST["status$i"]."' WHERE id=".$_POST["rid$i"]."";
//     }
    
    
//     if ($conn->query($sql) === TRUE) {
//         $counter += 1;
//     } else {
//         echo  "Error updating record: " . $conn->error ."<br>";
//     }  
// }
// $conn->close();
// if($counter==$total){
//     echo'<script type="text/javascript">
// 	alert("Record updated successfully");
// 	window.location = document.referrer;
// 	</script>';
// }



?>