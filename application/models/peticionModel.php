<?php
class peticionModel extends CI_Model
{

   public function __construct()
   {
      parent::__construct();
   }


   public function createPeticion ($name, $email, $phone, $message)
   {
      $query = "INSERT INTO peticiones (nombre_peticion,correo_peticion,telefono_peticion,texto_peticion) VALUES (?, ?, ?, ?)";
      return $this->db->query($query, array($name, $email, $phone, $message));
   }

}
