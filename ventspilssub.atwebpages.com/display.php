<?php
   // show errors 
error_reporting(E_ALL);
ini_set('display_errors', 1);
    //errors ends here 
// call the page for connecting to the db
require_once('dbconnector.php');
?>
<?php
$get_member =" SELECT ID, Vards, Uzvards, telnr, epasts FROM Pirmais";
$user_coder1 = $con->prepare($get_member);
$user_coder1 ->execute();

echo "<table border='1' >
<tr>
<td align=center> <b>ID</b></td>
<td align=center><b>Vards</b></td>
<td align=center><b>Uzvards</b></td>
<td align=center><b>Tel.Nr</b></td>
<td align=center><b>epasts</b></td></td>";

while($row =$user_coder1->fetch(PDO::FETCH_ASSOC)){
$firstName = $row['Vards'];
$ID = $row['ID'];
$telnr =$row['telnr'];
$lastName =    $row['Uzvards'];
$email = $row['epasts'];

    echo "<tr>";
    echo "<td align=center>$ID</td>";
    echo "<td align=center>$firstName</td>";
    echo "<td align=center>$lastName </td>";
    echo "<td align=center>$telnr </td>";           
    echo "<td align=center>$email</td>";
    echo "</tr>";
}
echo "</table>";
?>