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

   //getters & setters

   public function getFirstName()
   {
      return $this->fname;
   }

   public function setFirstName($fname)
   {
      return $this->fname = $fname;
   }
   public function setLastName($lname)
   {
      return $this->lname = $lname;
   }
   public function setEmail($email)
   {
      return $this->email = $email;
   }
   public function setPassword($password)
   {
      return $this->password = $password;
   }
   public function setRole($role)
   {
      return $this->role = $role;
   }
   public function setAddress($address)
   {
      return $this->address = $address;
   }
   public function setPhone($phone)
   {
      return $this->phone = $phone;
   }
   public function setProfileImage($profileImage)
   {
      return $this->profileImage = $profileImage;
   }


   public function add()
   {

      $sql = "INSERT INTO users (user_fname, user_lname, user_password, user_email, user_address, user_contact_number) VALUES ('$this->fname', '$this->lname', '$this->password', '$this->email', '$this->address', '$this->phone')";
      $result = $this->connect()->query($sql);

      if (!$result) {
         echo "database Something went wrong";
      }
   }

   public function getAllUsers()
   {
      return $this->allRecords("SELECT * FROM users");
   }

   public function getUserById($id)
   {
     $result = $this->single("SELECT * FROM users WHERE user_id ={$id}");

   //   if(is_array($result)) {
   //   foreach ($result as $data) {
       
   //    $this->setFirstName($data['user_fname']);
   //    $userFname = $data['user_fname'];
   //    $userLname = $data['user_lname'];
   //    $userEmailId = $data['user_email'];
   //    $userRole = $data['user_role'];
   //   }
   // }
   }

   public function updateUser($id)
   {
      $this->update("UPDATE users SET user_fname = '$this->fname', user_lname = '$this->lname', user_address ='$this->address', user_contact_number = '$this->phone' WHERE user_id = {$id}");
   }

   public function deleteUser($id)
   {
      $this->delete("DELETE FROM users where user_id =" . $id);
   }
}
