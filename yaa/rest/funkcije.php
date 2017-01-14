<?php







   function get_price($find){
      
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 $niz1=array();
 $niz2=array();
$sql = "SELECT id,username,password FROM admini";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {
array_push($niz1,$row["id"]);
array_push($niz2,$row["username"]);

}

$k=0;



foreach($niz1 as $da){
 if($da=$find)
 {return $niz2[$k];break;
}
$k++;
}

}
?>