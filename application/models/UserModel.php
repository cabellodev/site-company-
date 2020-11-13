<?php
class UserModel extends CI_Model
{

   public function __construct()
   {
      parent::__construct();
   }


   public function createUser($name, $email, $rut, $hash, $rango)
   {
      $query = "INSERT INTO user (nombre,password_hash,estado,user.range,rut,email) VALUES (?, ?, ?, ?,?,?)";
      return $this->db->query($query, array($name, $hash, true, $rango, $rut, $email));
   }

}
