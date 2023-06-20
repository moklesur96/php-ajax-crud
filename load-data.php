<?php

$connDB = mysqli_connect('localhost', 'root', 'mysql', 'php-ajax-crud') or die('Connection Faild.');

$limit_per_page = 10;
$page = '';

if (isset($_POST['page_id'])) {
  $page = $_POST['page_id'];
} else {
  $page = 1;
}

$offset = ($page - 1) * $limit_per_page;

// Load Data
$query = "SELECT * FROM students LIMIT $offset, $limit_per_page";
$get_query = mysqli_query($connDB, $query);

$output = "<table id='customers'>";

$output .= ' <tr>
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

$output .= "</table>";
$output .= "<div class='pagination'>";

$query = "SELECT * FROM students";
$get_query = mysqli_query($connDB, $query);
$total_data = mysqli_num_rows($get_query);
$total_page = ceil($total_data / $limit_per_page);

for ($i = 1; $i <= $total_page; $i++) {
  if ($i == $page) {
    $class_name = 'active';
  } else {
    $class_name = '';
  }
  $output .= "<a class='$class_name' href='#' id='$i'>$i</a>";
}

$output .= "</div>";

echo $output;
