<?php


$connDB = mysqli_connect('localhost', 'root', 'mysql', 'php-ajax-crud') or die('Connection Faild.');

$search_key = $_POST['searchKey'];
$query = "SELECT * FROM students WHERE fname LIKE '%{$search_key}%' OR lname LIKE '%{$search_key}%'";
$get_query = mysqli_query($connDB, $query);

if (mysqli_num_rows($get_query) > 0) {
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

    // $output .= "</table>";
    // $output .= "<div class='pagination'>";

    // $query = "SELECT * FROM students";
    // $get_query = mysqli_query($connDB, $query);
    // $total_data = mysqli_num_rows($get_query);
    // $total_page = ceil($total_data / $limit_per_page);

    // for ($i = 1; $i <= $total_page; $i++) {
    //   if ($i == $page) {
    //     $class_name = 'active';
    //   } else {
    //     $class_name = '';
    //   }
    //   $output .= "<a class='$class_name' href='#' id='$i'>$i</a>";
    // }

    // $output .= "</div>";

    echo $output;
} else {
    echo "<h2>No Data Found.</h2>";
}
