<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
echo $q;
$con = mysqli_connect('localhost','24314','vhadifut','24314_db') or die("no connect");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//$sql="SELECT * FROM w3c_ajax_demo WHERE id LIKE '".$q."'" or die("sql nope");
$sql="SELECT * FROM w3c_ajax_demo WHERE FirstName LIKE '$q%' OR LastName LIKE '$q%'" or die("sql Nope");
$result = mysqli_query($con,$sql) or die("Fail");

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Hometown'] . "</td>";
    echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>