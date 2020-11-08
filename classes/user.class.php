<?php

class User extends Database
{

   private $id;
   private $fname;
   private $lname;
   private $email;
   private $password;
   private $role;
   private $address;
   private $phone;
   private $profileImage;
   private $signUpDate;

  // private $currentPassword;
   private $newPassword;

   //getters & setters

   public function setId($id){
      $this->id = $id;
   }
   public function getId(){
      return $this->id;
   }
   public function setFirstName($fname)
   {
      $this->fname = $fname;
   }
   public function getFirstName()
   {
      return $this->fname;
   }
    public function setLastName($lname)
   {
      $this->lname = $lname;
   }
   public function getLastName()
   {
      return $this->lname;
   }
   public function setEmail($email)
   {
      $this->email = $email;
   }
   public function getEmail()
   {
      return $this->email;
   }
   public function setPassword($password)
   {
      $this->password = $password;
   }
   public function getPassword()
   {
      return $this->password;
   }
   public function setRole($role)
   {
      $this->role = $role;
   }
   public function getRole()
   {
      return $this->role;
   }
   public function setAddress($address)
   {
      $this->address = $address;
   }
   public function getAddress()
   {
      return $this->address;
   }
   public function setPhone($phone)
   {
      $this->phone = $phone;
   }
   public function getPhone()
   {
      return $this->phone;
   }
   public function setProfileImage($profileImage)
   {
      $this->profileImage = $profileImage;
   }
   public function getProfileImage()
   {
      return $this->profileImage;
   }
   public function setSignUpDate($signUpDate){
      $this->signUpDate = $signUpDate;
   }
   public function getSignUpDate()
   {
      return $this->signUpDate;
   }


   public function add()
   {

      $sql = "INSERT INTO users (user_fname, user_lname, user_password, user_email, user_address, user_contact_number) VALUES ('$this->fname', '$this->lname', '$this->password', '$this->email', '$this->address', '$this->phone')";
      $result = $this->stmt($sql);
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
    $result = $this->stmt("SELECT * FROM users WHERE user_id ={$id}");

     while ($row = $result->fetch_assoc()){
      $this->setId($row['user_id']);
      $this->setFirstName($row['user_fname']);
      $this->setLastName($row['user_lname']);
      $this->setPassword($row['user_password']);
      $this->setEmail($row['user_email']);
      $this->setRole($row['user_role']);
      $this->setAddress($row['user_address']);
      $this->setPhone($row['user_contact_number']);
      $this->setSignUpDate($row['sign_up_date']);
      $this->setProfileImage($row['user_profile_picture']);
  }
}

   public function updateProfile($id){
      $this->stmt("UPDATE users SET user_fname = '$this->fname', user_lname = '$this->lname', user_email = '$this->email', user_address ='$this->address', user_contact_number = '$this->phone' WHERE user_id = {$id}");

   }

   public function login($email, $password) {
      if ($email === $this->email && $password === $this->password) {
         header("Location: /foodl/dashboard");
      } else {
         echo "wrong username or password";
      }
   }

   //this function will run getUserById() which will have $this->id
   public function changePassword($password, $newPassword){
    //  $newPass = $newPassword;
      if($password === $this->password) {
      $this->stmt("UPDATE users SET user_password = {$newPassword} WHERE user_id = {$this->id}");
      } else {
         echo "You current password is correct.";
      }
   }

   public function deleteUser($id)
   {
      $this->stmt("DELETE FROM users where user_id =" . $id);
   }

   function resetUser() {
      foreach ($this as $key => $value) {
          unset($this->$key);
      }
  }
}

