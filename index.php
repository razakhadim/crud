<?php

//require_once ('class-loader.inc.php');
//require_once ("database.class.php");
require_once ("classes/database.class.php");
require_once ("classes/user.class.php");

// $db = new Database();
// //$db->connect();

$user = new User();
//$user->getAllUsers();

?>
<table class="table table-bordered table-hover usertable">
<thead>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Role</th>
        <th>Admin</th>
    </tr>
</thead>

<tbody>
    <?php

    //getting all the user details and creating variables

   // $table = 'users';
   // $datas = $user->getAllUsers();
    foreach ($user->getAllUsers() as $data) {
       
        $userId = $data['user_id'];
        $userFname = $data['user_fname'];
        $userLname = $data['user_lname'];
        $userEmailId = $data['user_email'];
        $userRole = $data['user_role'];

        echo "<tr>";
        echo "<td>{$userId}</td>";
        echo "<td>{$userFname}</td>";
        echo "<td>{$userLname}</td>";
        echo "<td>{$userEmailId}</td>";
        echo "<td>{$userRole}</td>";
        echo "<td><a href='profile.php?uid={$userId}'>view </a><a href='delete.php?uid={$userId}'>delete </a><a href='update.php?uid={$userId}'> update</a></td>";
        echo "</tr>";
    }



    $user->setFirstName('class');
    $user->setLastName('class');
    $user->setEmail('email@class.class');
    $user->setPassword('class');
    $user->setAddress ('class');
    $user->setPhone('class');

    $user->updateUser(69);

    $user->setFirstName('two');
    $user->setLastName('two');
    $user->setEmail('two@class.class');
    $user->setPassword('two');
    $user->setAddress ('two');
    $user->setPhone('two');

    $user->updateUser(70);

    var_dump($user->getUserById(70));

    ?>


