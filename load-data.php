<?php

$connDB = mysqli_connect('localhost', 'root', 'mysql', 'php-ajax-crud') or die('Connection Faild.');


// Load Data
$query = "SELECT * FROM students";
$get_query = mysqli_query($connDB, $query);

$output = ' <tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Age</th>
<th>Gender</th>
<th>Country</th>
</tr>';

while ($row = mysqli_fetch_assoc($get_query)) {
    $output .= "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fname']} {$row['lname']}</td>
    <td>{$row['email']}</td>
    <td>{$row['age']}</td>
    <td>{$row['gender']}</td>
    <td>{$row['country']}</td>
  </tr>";
}

echo $output;
