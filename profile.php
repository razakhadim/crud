<?php

include ('classes/database.class.php');
//include ('classes/product.class.php');
include ('classes/user.class.php');

$user = new User();
//$product = new Product();


$user = new User();
//$product = new Product();


$result = $user->getUserById(80);
// while ($row = $result->fetch_assoc()){
//     $user->setFirstName($row['user_fname']);
// }

echo $user->getFirstName();
echo $user->getLastName();
echo $user->getEmail();
echo $user->getPassword();
echo $user->getRole();
echo $user->getAddress();
// echo $user->getFirstName();
// echo $user->getFirstName();
// echo $user->getFirstName();
// echo $user->getFirstName();


//login

$getUser = $user->getUserById(80);
echo $user->login('username', 'password');


//$result = $user->getUserById(51);
//echo $user->getFirstName();

//if($result) {
//while ($row = $result->fetch_row()){

 //$user->setFirstName($row['user_fname']);
 //$user->setLastName($row['user_lname']);

//}

//}

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
