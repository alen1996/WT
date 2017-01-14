<!DOCTYPE html>
<html>


 <?php
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



$xml=simplexml_load_file("admini.xml") or die("Error: Ne postoji fajl");


foreach($xml->children() as $admin) {
$c= $admin->id;
$d= $admin->pasword;
$e= $admin->username;


$sql = "Insert into Admini(id,username,password ) 
Values ('$c','$e','$d');";


if ($conn->query($sql) === TRUE) {
    echo "Uspjesno ocitano";
} else {
    
}

}
$xml1=simplexml_load_file("nekretnine.xml") or die("Error: Cannot create object");

foreach($xml1->children() as $nekretnina) {
$c= $nekretnina->naziv;
$d= $nekretnina->ikona;
$e= $nekretnina->cijena;
$f= $nekretnina->id;

$sql = "Insert into nekretnine(id,naziv,cijena,ikona,Brine_admin ) 
Values ('$f','$c','$e','$d','1');";


if ($conn->query($sql) === TRUE) {
    echo "Uspjesno dodano";
} else {
    
}



} 





$xml2=simplexml_load_file("clanovi.xml") or die("Error: Cannot create object");

foreach($xml2->children() as $clan) {
$c= $clan->id;
$d= $clan->pasword;
$e= $clan->username;


$sql = "Insert into clanovi(id,username,password,Nadgleda_admin) 
Values ('$c','$e','$d','2');";


if ($conn->query($sql) === TRUE) {
    echo "Uspjesno ocitano";
} else {
   
}



} 







$conn->close();
echo "Radnja uspjesno izvrsena";
?> 

<a href="Home.php">Vrati se </p>

<html>