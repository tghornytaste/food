<?php
    $mysqli = new mysqli('localhost', 'root', '', 'test');

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit();
}

$stck = $_POST['Stock'];
$itm = $_POST['Items'];

if (isset($_POST['submit'])) {
   $query = "SELECT * FROM $stck WHERE Items = $itm";

   $data = mysqli_query($mysqli, $query) ;

   if (!$data) {
       echo("Error description: " . mysqli_error($mysqli));
   } else {

       while ($row = mysqli_fetch_array($data)) {
           echo "<tr>
                <td>" . $row['No'] . "</td>
                <td>" . $row['Qty'] . "</td>
                <td>" . $row['date'] . "</td>
                <td>" . $row['Sold'] . "</td>
                <td>" . $row['Total'] . "</td>
              </tr>";
       }
   }
}
?>