<?php

include ('classes/database.class.php');
//include ('classes/product.class.php');
include ('classes/user.class.php');

$user = new User();
//$product = new Product();



$result = $user->getUserById(51);
echo $user->getFirstName();


// if (isset($_GET['uid'])) {
//      $id = $_GET['uid'];
// }

// $result = $user->getUserById($id);
// echo $user->getFirstName();


 

// //    $numRows = $result->num_rows;

//         if ($result > 0) {
//             while ($row = $this->result->fetch_assoc()) {
//                $data[user_id] = $row;
//             }
//         }
//         echo $data;
