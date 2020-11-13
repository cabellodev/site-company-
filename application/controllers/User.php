
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {



    public function createUser(){
            
            $data = $this->input->post('data');
            $name = $data['name'];
            $rut = $data['rut'];
            $email = $data['email'];
            $rango = $data['rango'];
            $pass = $data['passwd'];

            $ok = true;
            $err = array();

            if ($name == "") {
                $ok = false;
                $err['name']  = "Ingrese un nombre para el usuario.";
            }
            if ($email == "") {
                $ok = false;
                $err['email'] = "Ingrese un correo electrónico.";
            }
            if ($rut == "") {
                $ok = false;
                $err['rut'] = "Ingrese su rut porfavor";
            }
            if ($rango == "0") {
                $ok = false;
                $err['rango'] = "Ingrese un telefono porfavor";
            }
            if ($pass == "") {
                $ok = false;
                $err['passwd'] = "Ingrese una contraseña porfavor.";
            }

            if ($ok) {
                $hash = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 13]); //hashing pass or encrypt
                $this->load->model('UserModel');
                $res = $this->UserModel->createUser($name, $email, $rut, $hash, $rango);
                if ($res) {
                    $this->response->sendJSONResponse(array('msg' => "Usuario creado con éxito."));
                } else {
                    $this->response->sendJSONResponse(array('msg' => "No se pudo crear el usuario. Probablemente el correo ya ha sido usado."), 400);
                }
            } else {
                $this->response->sendJSONResponse(array('msg' => "Corrija los errores del formulario", 'err' => $err), 400);
            }

            
       
    }

	
}








