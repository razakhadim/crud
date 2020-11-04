<?php

class User extends Database
{

    private $fname;
    private $lname;
    private $email;
    private $password;
    private $role;
    private $address;
    private $phone;
    private $profileImage;


    public function add()
    {

        $sql = "INSERT INTO users (user_fname, user_lname, user_password, user_email, user_role, user_address, user_contact_number) VALUES ('$fname', '$lname', '$password', '$email', '$role', '$address', '$ph_number')";
        $result = $this->connect()->query($sql);

        if (!$result) {
            echo "Something went wrong";
        }
    }

    public function getAllUsers()
    {
        return $this->allRecords("SELECT * FROM users");
    }

    public function getUserById($id)
    {
        return $this->single("SELECT FROM users WHERE user_id ={$id}");
    }

    public function updateUser()
    {
    }

    public function deleteUser($id)
    {
        $this->delete("DELETE FROM users where user_id =" . $id);
    }
}
