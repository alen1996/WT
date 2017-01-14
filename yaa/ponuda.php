<?php
// Start the session
session_start();
?>





<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="grid.css">


</head>
<body onload="UcitajFormuLogin()">
<div id="sve">

<script src="funs.js"></script>
<div class="header">

<h1 id="Gore">
Doom Estate Agency

</h1>
</div>
<div class="sredina">
<div class="row">
<div class="col-3 col-m-3">
 <form name="forma2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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





if(isset($_REQUEST['Odjava']))
{
session_unset();
}
$k=0;

if (isset($_SESSION['username']))
{
echo "<br><input type=submit  value=Odjava name=Odjava>";

$k=1;
}
if((isset($_REQUEST['korisnik']))&&(isset($_REQUEST['pass']))&&(isset($_REQUEST['Signin'])))
{
$xml1 = simplexml_load_file('admini.xml');
$sql = "SELECT username,password FROM admini";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) 
  {

if(($row["username"]==$_REQUEST['korisnik'])&&($row["password"]==$_REQUEST['pass']))
{echo "Dobro dosli admine";

$_SESSION['username'] =(string)$row["username"];
$_SESSION['pasword'] =(string)$row["password"];



echo "<br><input type=submit  value=Odjava name=Odjava>";
$k=1;
}
}
}
if($k==0){




$userErr = $passErr =  "";

if (isset($_REQUEST['Signin']))
{
if (empty($_POST["korisnik"])) {
    $userErr = "Username je potreban";

  } else {
    $un = test_input($_POST["korisnik"]);

}
if (empty($_POST["pass"])) {
    $passErr = "Password je potrebam";

  } else {
    $pass = test_input($_POST["korisnik"]);
  }
}











echo "Username:<br>";
echo $userErr;
 echo "<input type=text name=korisnik><br>";
echo "Password:<br>";
echo $passErr;
 echo "<input type=password name=pass><br>";


echo "<input type=submit  value=Prijavi se name=Signin>";
echo "<p><a href=passprob.html>Zaboravili ste password?Kliknite ovdje!</a></p><br>";
echo "<p id=greska></p>";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





?>
</form>

</div>

<div class="col-6 col-m-6">
<div class="col-6 col-m-6">
 



<?php




$sql = "SELECT id,naziv,cijena,ikona FROM nekretnine";
$result = $conn->query($sql);

$pom=0;
if ($result->num_rows >= 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
if($pom==0)
{
echo '<img src="'.$row["ikona"].'" width=100% align=left vertical-align:middle >';
   echo "id: " . $row["id"]. "<br>";

echo "Naziv: " . $row["naziv"]. "<br>";
echo "Cijena: " . $row["cijena"]. "<br>";

 }   

$pom++;

}
} else {
    echo "0 results";
}
?>




</div>
<div class="col-6 col-m-6">

<?php

$sql = "SELECT id,naziv,cijena,ikona FROM nekretnine";
$result = $conn->query($sql);

$pom=0;
if ($result->num_rows >= 2) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
if($pom==1)
{
echo '<img src="'.$row["ikona"].'" width=100% align=left vertical-align:middle >';
   echo "id: " . $row["id"]. "<br>";

echo "Naziv: " . $row["naziv"]. "<br>";
echo "Cijena: " . $row["cijena"]. "<br>";

 }   

$pom++;

}
} else {
    echo "0 results";
}
?>


</div>


</div>

<div class="col-3 col-m-12">
<div class="aside">
Adresa:<br>
Put zivota bb<br>
Grad:<br>
Sarajevo:<br>
Telefon:<br>
+38769999999<br>
E-mail:<br>
hotmail@doomnekretnine.com
</div>
</div>

</div>

<div class="row">
<div class="col-3 col-m-3 menu">
<ul>
<li> <a href="Home.php">Home</a></li>
<li> <a href="informacije.php">O nama</a></li>
<li> <a href="kontakt.php">Kontakt</a></li>
<li> <a href="ponuda.php">Ponuda</a></li>

</ul>
</div>

<div class="col-6 col-m-6">
<div class="col-6 col-m-6">

<?php
$sql = "SELECT id,naziv,cijena,ikona FROM nekretnine";
$result = $conn->query($sql);

$pom=0;
if ($result->num_rows >= 3) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
if($pom==2)
{
echo '<img src="'.$row["ikona"].'" width=100% align=left vertical-align:middle >';
   echo "id: " . $row["id"]. "<br>";

echo "Naziv: " . $row["naziv"]. "<br>";
echo "Cijena: " . $row["cijena"]. "<br>";

 }   

$pom++;

}
} else {
    echo "0 results";
}
?>

</div>

<div class="col-6 col-m-6">

 
<?php
$sql = "SELECT id,naziv,cijena,ikona FROM nekretnine";
$result = $conn->query($sql);

$pom=0;
if ($result->num_rows >= 4) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
if($pom==3)
{
echo '<img src="'.$row["ikona"].'" width=100% align=left vertical-align:middle >';
   echo "id: " . $row["id"]. "<br>";

echo "Naziv: " . $row["naziv"]. "<br>";
echo "Cijena: " . $row["cijena"]. "<br>";

 }   

$pom++;

}
} else {
    echo "0 results";
}
?>

</div>

</div>

<div class="col-3 col-m-12">
<div class="aside">
Vrsimo usluge <br>
-Prodaja nekretnina<br>
-Iznajmljivanje nekrentnina<br>
-Pravni savjeti<br>
-Procjena vrijednosti<br>
</div>
</div>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">Å~</span>
      <h2>Prijava</h2>
    </div>
    <div class="modal-body">
      <p>Prijavi se <br></p>
      <form name="forma2" action="forma2.asp" onsubmit="return validacijaForme2()" method="post">
Username:<br>
 <input type="text" name="korisnik"><br>
Password:<br>
 <input type="password" name="password"><br>

 <input type="checkbox" name="Zapamti" value="Remember">Zapamti me<br>
<input type="submit" value="Prijava!"><br>
<p><a href="passprob.html">Zaboravili ste password?Kliknite ovdje!</a></p>
<p id="greska"></p>
</form>


    </div>

  </div>

</div>



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("Login");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {

        modal.style.display = "none";
    }
}
</script>












</div>
<div class="row">
<div class="col-3 col-m-3">
<div class="aside">
Prodajete nekretninu?Neka od ponudjenih nekretnina vas interesuje?<a href="kontakt.html">Kontaktirajte nas</a>
</div>
</div>

<div class="col-6 col-m-6">

<div class="col-6 col-m-6">
  <?php
$sql = "SELECT id,naziv,cijena,ikona FROM nekretnine";
$result = $conn->query($sql);

$pom=0;
if ($result->num_rows >= 5) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
if($pom==4)
{
echo '<img src="'.$row["ikona"].'" width=100% align=left vertical-align:middle >';
   echo "id: " . $row["id"]. "<br>";

echo "Naziv: " . $row["naziv"]. "<br>";
echo "Cijena: " . $row["cijena"]. "<br>";

 }   

$pom++;

}
} else {
    echo "0 results";
}
?>
</div>
<div class="col-6 col-m-6">
<?php
$sql = "SELECT id,naziv,cijena,ikona FROM nekretnine";
$result = $conn->query($sql);

$pom=0;
if ($result->num_rows >= 6) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
if($pom==5)
{
echo '<img src="'.$row["ikona"].'" width=100% align=left vertical-align:middle >';
   echo "id: " . $row["id"]. "<br>";

echo "Naziv: " . $row["naziv"]. "<br>";
echo "Cijena: " . $row["cijena"]. "<br>";

 }   

$pom++;

}
} else {
    echo "0 results";
}
?>

</div>


</div>

<div class="col-3 col-m-12">
<div class="aside">
Saznaj vise o nama
</div>
</div>

</div>


<?php


$k=6;
$xml=simplexml_load_file("nekretnine.xml") or die("Nepostojeci fajl");
$idovi = array();

$imena1 = array();
$cijena1 = array();
$slike1 = array();
$sql = "SELECT id,naziv,cijena,ikona FROM nekretnine";
$result = $conn->query($sql);

$pom=0;
if ($result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
array_push($idovi,$row["id"]);
array_push($imena1,$row["naziv"]);
array_push($cijena1,$row["cijena"]);
array_push($slike1,$row["ikona"]);

$pom++;

}
} else {
    echo "0 results";
}







while($k<(count($idovi)))
{
echo "<div class=row>";
echo "<div class=col-3 col-m-3>";

echo "</div>";

echo "<div class=col-3 col-m-3>";
$lokacija= $xml->nekretnina[$k]->ikona;
echo '<img src="'.$slike1[$k].'" width=100% align=left vertical-align:middle >';

   echo "id: " . $idovi[$k]. "<br>";

echo "Naziv: " . $imena1[$k]. "<br>";
echo "Cijena: " . $cijena1[$k]. "<br>";
echo "</div>";
$k++;
echo "<div class=col-3 col-m-3>";

if($k<(count($idovi)))
{
echo '<img src="'.$slike1[$k].'" width=100% align=left vertical-align:middle >';
   echo "id: " . $idovi[$k]. "<br>";

echo "Naziv: " . $imena1[$k]. "<br>";
echo "Cijena: " . $cijena1[$k]. "<br>";
}
echo "</div>";
echo "<div class=col-3 col-m-3>";

echo "</div>";


echo "</div>";
$k++;
}
$conn->close();
?>











</div>

<div class="footer">
<p></p>
</div>
</div>





</body>
</html>
